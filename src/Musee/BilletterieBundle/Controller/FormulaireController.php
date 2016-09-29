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
        $editForm = $this->createForm(FormBilletterieGeneral::class, $cmd);
        
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {

        $validator = $this->get('validator');
        $listErrors = $validator->validate($cmd);
        if(count($listErrors) > 0) {
        // $listErrors est un objet, sa méthode __toString permet de lister joliement les erreurs
        return new Response((string) $listErrors);
        } 
        foreach ($cmd->getLigneCommande() as $visiteur) {$visiteurs->add($visiteur);}
        $data=$editForm->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($cmd);
        $em->flush();
        return $this->redirectToRoute('visiteurs_form', array('id' => $cmd->getId(),));
        }
        return $this->render('MuseeBilletterieBundle:Formulaire:index.html.twig', array('form' => $editForm->createView(), 'init' => 1, ));
        }
        
 /**
 * @ParamConverter("cmd", options={"mapping": {"id": "id"}})
 */    
        
      public function addVisiteursAction(Commande $cmd, Request $request)  {
       
          
        // On génère le nombre de visiteurs
        $visiteurs=new ArrayCollection();
        for($i=1; $i <= $cmd->getQuantite(); $i++){$visiteurs->add(new LigneCommande);}
        $cmd->setLigneCommande($visiteurs);
        
        $editForm = $this->createForm(FormBilletterieVisiteurs::class, $cmd);
        $editForm->handleRequest($request);         
        if ($editForm->isValid()) { 
        $em = $this->getDoctrine()->getManager();
        foreach ($cmd->getLigneCommande() as $visiteur) { $visiteur->setCommande($cmd); $em->persist($visiteur);  }
        $em->persist($cmd);
        $em->flush();
        $id=$cmd->getId();
        return $this->redirectToRoute('panier', array('id' => $id));
        }
        return $this->render('MuseeBilletterieBundle:Formulaire:visiteurs.html.twig', array('form' => $editForm->createView(), 'init' => 1, 'date' => $cmd->getDate(), 'quantite' => $cmd->getQuantite(), 'email' => $cmd->getEmail(), 'type' => $cmd->getType(),));
        }
    
        
        
    /**
 * @ParamConverter("cmd", options={"mapping": {"id": "id"}})
 */
    public function paiementAction(Commande $cmd, Request $request) {
        
        $em = $this->getDoctrine()->getManager();
        $visiteurs=$em->getRepository('MuseeBilletterieBundle:LigneCommande')->findBy(array('commande' => $cmd));
        $prix = $this->container->get('musee_billetterie.prix');     
        $cmd->setLigneCommande($visiteurs);
        $prixTotal=0;
        foreach ($cmd->getLigneCommande() as $visiteur) {   
        $tarif=$prix->calculePrix($visiteur->getBorn(), $cmd->getDate(), $visiteur->getTarifReduit());
        $visiteur->setTarif($tarif);
        $prixTotal+=$tarif;
        }
        $cmd->setPrixTotal($prixTotal);
        $em->persist($cmd);
        $stripe = $this->container->get('musee_billetterie.stripe');
        if($request->request->get('stripeToken'))
        {$stripe->paiementStripe($request->request->get('stripeToken'),$request->request->get('stripeEmail'), $prixTotal ); 
        $cmd->setPaiement(true);      
        $session = $request->getSession();
        $session->getFlashBag()->add('info', 'Vous allez être débité de '.$cmd->getPrixTotal().',00 € ! Vous allez recevoir les billets par email à l\'adresse '.$cmd->getEmail().'. Imprimez les et présentez les à l\'entrée');
        $em->persist($cmd);
        $em->flush();
        }
        if($cmd->getPaiement() == true){return $this->redirectToRoute('musee_billetterie_home');    }      
        $editForm = $this->createForm(FormBilletterieGeneral::class, $cmd);
        return $this->render('MuseeBilletterieBundle:Formulaire:panier1.html.twig', array('form' => $editForm->createView(), 'init' => 1, 'cmd' => $cmd));
             
}

    public function EmailAction()
{
   
          $message = \Swift_Message::newInstance()
        ->setSubject('Vos billets d\'entrée')
        ->setFrom('Billetterie@MuseeduLouvre.com')
        ->setTo('camille.palpacuer@gmail.com')
        ->setBody(
            $this->renderView('MuseeBilletterieBundle:Email:billets.html.twig'
            ),
            'text/html'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;
 $email=$this->get('mailer')->send($message);

    return $this->render('MuseeBilletterieBundle:Formulaire:test.html.twig');
}


        }

?>