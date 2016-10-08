<?php

// src/Musee/BilletterieBundle/Controller/FormulaireController.php

namespace Musee\BilletterieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Musee\BilletterieBundle\Entity\Commande;
use Musee\BilletterieBundle\Entity\LigneCommande;
use Musee\BilletterieBundle\Form\Type\FormBilletterieGeneral;
use Musee\BilletterieBundle\Form\Type\FormBilletterieVisiteurs;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class FormulaireController extends Controller {

    public function indexAction(Request $request) {

        $cmd = new Commande();
        $visiteurs = new ArrayCollection();
        $Form = $this->createForm(FormBilletterieGeneral::class, $cmd);
        $Form->handleRequest($request);

        if ($Form->isValid()) {
            foreach ($cmd->getLigneCommande() as $visiteur) {
                $visiteurs->add($visiteur);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($cmd);
            $em->flush();
            return $this->redirectToRoute('visiteurs_form', array('id' => $cmd->getId()));
        }
        return $this->render('MuseeBilletterieBundle:Formulaire:index.html.twig', array('form' => $Form->createView()));
    }

    /**
     * @ParamConverter("cmd", options={"mapping": {"id": "id"}})
     */
    public function addVisiteursAction(Commande $cmd, Request $request) {
        $quantite = $cmd->getQuantite();
        for ($i = 1; $i <= $quantite; $i++) {
            $cmd->addLigneCommande(new LigneCommande());
        }
        $form = $this->createForm(FormBilletterieVisiteurs::class, $cmd);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            foreach ($cmd->getLigneCommande() as $visiteur) {
                $visiteur->setCommande($cmd);
                $em->persist($visiteur);
            }
            $em->persist($cmd);
            $em->flush();
            return $this->redirectToRoute('panier', array('id' => $cmd->getId()));
        }
        return $this->render('MuseeBilletterieBundle:Formulaire:visiteurs.html.twig', array('form' => $form->createView(), 'init' => 1, 'date' => $cmd->getDate(), 'quantite' => $cmd->getQuantite(), 'email' => $cmd->getEmail(), 'type' => $cmd->getType(),));
    }

    /**
     * @ParamConverter("cmd", options={"mapping": {"id": "id"}})
     */
    public function paiementAction(Commande $cmd, Request $request) {
        //Calcule le prix total 
        $prixTotal = 0;
        $prix = $this->container->get('musee_billetterie.prix');
        foreach ($cmd->getLigneCommande() as $ligneCommande) {
            $tarif = $prix->calculePrix($ligneCommande->getBorn(), $cmd->getDate(), $ligneCommande->getTarifReduit());
            $ligneCommande->setTarif($tarif);
            $prixTotal+=$tarif;
        }    
        
        $cmd->setPrixTotal($prixTotal);
     
        $token = $request->request->get('stripeToken');
        if ($token) {
            $this->container->get('musee_billetterie.stripe')->paiementStripe($token, $request->request->get('stripeEmail'), $prixTotal);
            $cmd->setPaiement(true)->setToken($token);
            $request->getSession()->getFlashBag()->add('info', 'Vous allez être débité de ' . $cmd->getPrixTotal() . ',00 € ! Vous allez recevoir les billets par email à l\'adresse ' . $cmd->getEmail() . '. Imprimez les et présentez les à l\'entrée');
            $em = $this->getDoctrine()->getManager();
            $em->persist($cmd);
            $em->flush();
        }
        if ($cmd->getPaiement() === true) {
            return $this->redirectToRoute('musee_email', array('id' => $cmd->getId()));
        } else {
            return $this->render('MuseeBilletterieBundle:Formulaire:panier1.html.twig', array('form' => $this->createForm(FormBilletterieGeneral::class, $cmd)->createView(), 'init' => 1, 'cmd' => $cmd));
        }
    }

    /**
     * @ParamConverter("cmd", options={"mapping": {"id": "id"}})
     */
    public function emailAction(Commande $cmd) {
        // Format de date texte
        setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
        $dateFormat = utf8_encode(strftime("%d %B %Y", strtotime($cmd->getDate())));
        // Création de l'email
        $message = \Swift_Message::newInstance();
        $cid = $message->embed(\Swift_Image::fromPath('http://localhost/Symfony/web/img/logo.png'));
        $message->setSubject('Vos billets d\'entrée')->setFrom('Billetterie@MuseeduLouvre.com');
        $message->setTo($cmd->getEmail())
                ->setBody($this->renderView('MuseeBilletterieBundle:Email:email.html.twig', array('cid' => $cid, 'cmd' => $cmd, 'visiteurs' => $cmd->getLigneCommande(), 'date' => $dateFormat)), 'text/html');
        // Création des billets au format PDF
        $html = $this->renderView('MuseeBilletterieBundle:Billets:billets.html.twig', array('cmd' => $cmd, 'visiteurs' => $cmd->getLigneCommande(), 'date' => $dateFormat));
        $pdf = $this->get('knp_snappy.pdf')->getOutputFromHtml($html);
        $message->attach(\Swift_Attachment::newInstance($pdf, 'billets.pdf'));
        $this->get('mailer')->send($message);

        return $this->redirectToRoute('musee_billetterie_home');
    }

}

