<?php

// src/Musee/BilletterieBundle/Controller/FormulaireController.php

namespace Musee\BilletterieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

        $visiteurs = new ArrayCollection();
        for ($i = 1; $i <= $cmd->getQuantite(); $i++) {
            $visiteurs->add(new LigneCommande);
        }
        $cmd->setLigneCommande($visiteurs);
        $editForm = $this->createForm(FormBilletterieVisiteurs::class, $cmd);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            foreach ($cmd->getLigneCommande() as $visiteur) {
                $visiteur->setCommande($cmd);
                $em->persist($visiteur);
            }
            $em->persist($cmd);
            $em->flush();
            return $this->redirectToRoute('panier', array('id' => $cmd->getId()));
        }
        return $this->render('MuseeBilletterieBundle:Formulaire:visiteurs.html.twig', array('form' => $editForm->createView(), 'init' => 1, 'date' => $cmd->getDate(), 'quantite' => $cmd->getQuantite(), 'email' => $cmd->getEmail(), 'type' => $cmd->getType(),));
    }

    /**
     * @ParamConverter("cmd", options={"mapping": {"id": "id"}})
     */
    public function paiementAction(Commande $cmd, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $visiteurs = $em->getRepository('MuseeBilletterieBundle:LigneCommande')->findBy(array('commande' => $cmd));
        $prix = $this->container->get('musee_billetterie.prix');
        $cmd->setLigneCommande($visiteurs);
        //Calcule le prix total 
        $prixTotal = 0;
        foreach ($cmd->getLigneCommande() as $visiteur) {
            $tarif = $prix->calculePrix($visiteur->getBorn(), $cmd->getDate(), $visiteur->getTarifReduit());  $visiteur->setTarif($tarif); $prixTotal+=$tarif;  }
        $cmd->setPrixTotal($prixTotal);        $em->persist($cmd);
        $stripe = $this->container->get('musee_billetterie.stripe');        $token=$request->request->get('stripeToken');
        if ($token) {
            $stripe->paiementStripe($token, $request->request->get('stripeEmail'), $prixTotal);
            $cmd->setPaiement(true);   $cmd->setToken($token);
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Vous allez être débité de ' . $cmd->getPrixTotal() . ',00 € ! Vous allez recevoir les billets par email à l\'adresse ' . $cmd->getEmail() . '. Imprimez les et présentez les à l\'entrée');
            $em->persist($cmd);
            $em->flush();   }
        if ($cmd->getPaiement() === true) { return $this->redirectToRoute('musee_email', array('id' => $cmd->getId())); }
        $editForm = $this->createForm(FormBilletterieGeneral::class, $cmd);
        return $this->render('MuseeBilletterieBundle:Formulaire:panier1.html.twig', array('form' => $editForm->createView(), 'init' => 1, 'cmd' => $cmd));
    }

    /**
     * @ParamConverter("cmd", options={"mapping": {"id": "id"}})
     */
    public function EmailAction(Commande $cmd) {
        $em = $this->getDoctrine()->getManager();
        $visiteurs = $em->getRepository('MuseeBilletterieBundle:LigneCommande')->findBy(array('commande' => $cmd));

        // Format de date texte
        setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
        $dateFormat = utf8_encode(strftime("%d %B %Y", strtotime($cmd->getDate())));

        // Création de l'email
        $message = \Swift_Message::newInstance();
        $cid = $message->embed(\Swift_Image::fromPath('http://localhost/Symfony/web/img/logo.png'));
        $message->setSubject('Vos billets d\'entrée')->setFrom('Billetterie@MuseeduLouvre.com');
        $message->setTo($cmd->getEmail())
                ->setBody($this->renderView('MuseeBilletterieBundle:Email:email.html.twig', array('cid' => $cid, 'cmd' => $cmd, 'visiteurs' => $visiteurs, 'date' => $dateFormat)), 'text/html');

        // Création des billets au format PDF
        $html = $this->renderView('MuseeBilletterieBundle:Billets:billets.html.twig', array('cmd' => $cmd, 'visiteurs' => $visiteurs, 'date' => $dateFormat));
        $pdf = $this->get('knp_snappy.pdf')->getOutputFromHtml($html);
        $message->attach(\Swift_Attachment::newInstance($pdf, 'billets.pdf'));
        $this->get('mailer')->send($message);

        return $this->redirectToRoute('musee_billetterie_home');
    }

}

?>