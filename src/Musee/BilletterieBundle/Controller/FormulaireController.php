<?php

// src/Musee/BilletterieBundle/Controller/FormulaireController.php

namespace Musee\BilletterieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Musee\BilletterieBundle\Entity\Commande;
use Musee\BilletterieBundle\Entity\LigneCommande;
use Musee\BilletterieBundle\Form\Type\FormBilletterieGeneral;
use Doctrine\Common\Collections\ArrayCollection;

class FormulaireController extends Controller {

      public function addVisiteursAction($quantite, $email, $date, Request $request)  {
        // On récupère les infos du formulaire précédent           
        $cmd = new Commande();
        // On génère le nombre de visiteurs
        for($i=1; $i <= $quantite; $i++){$cmd->getLigneCommande()->add(new LigneCommande);}
        $editForm = $this->createForm(FormBilletterieGeneral::class, $cmd);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) { 
        $cmd->setQuantite($quantite);    
        $cmd->setEmail($email);
        $cmd->setDate($date);
        //A MODIFIER
        $cmd->setType('J');
        $em = $this->getDoctrine()->getManager();
        foreach ($cmd->getLigneCommande() as $visiteur) { $visiteur->setCommande($cmd); $em->persist($visiteur);  }
        $em->persist($cmd);
        $em->flush();
        $id=$editForm->getData()->getId();
        return $this->redirectToRoute('edit_form', array('id' => $id));
        }
        return $this->render('MuseeBilletterieBundle:Formulaire:visiteurs.html.twig', array('form' => $editForm->createView(), 'init' => 1, 'date' => $date, 'quantite' => $quantite, 'email' => $email));
        }
    
    
     public function addAction(Request $request) {
        $cmd = new Commande();
        $visiteurs = new ArrayCollection();
        $editForm = $this->createForm(FormBilletterieGeneral::class, $cmd);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
        foreach ($cmd->getLigneCommande() as $visiteur) {$visiteurs->add($visiteur);}
        $data=$editForm->getData();
        return $this->redirectToRoute('visiteurs_form', array('quantite' => $data->getQuantite(), 'email' => $data->getEmail(), 'date' => $data->getDate(), ));
        }
        return $this->render('MuseeBilletterieBundle:Formulaire:index.html.twig', array('form' => $editForm->createView(), 'init' => 1,));
        }
    
    
    
    public function editAction($id, Request $request) {
        
        $em = $this->getDoctrine()->getManager();
        $cmd = $em->getRepository('MuseeBilletterieBundle:Commande')->find($id);
        $visiteurs=$em->getRepository('MuseeBilletterieBundle:LigneCommande')->findBy(array('commande' => $cmd));
        if (!$cmd) { throw $this->createNotFoundException('No task found for id ' . $id); }
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
        $em->flush();

if(isset($_POST['stripeToken']))
{
$stripe = $this->container->get('musee_billetterie.stripe');
$stripe->paiementStripe($_POST['stripeToken'],$_POST['stripeEmail'], $prixTotal );
  echo '<h1>Successfully charged $50.00!</h1>';    
}  
        $editForm = $this->createForm(FormBilletterieGeneral::class, $cmd);
        return $this->render('MuseeBilletterieBundle:Formulaire:panier1.html.twig', array('form' => $editForm->createView(), 'init' => 1, 'cmd' => $cmd));
             
}}

?>