<?php

// src/Musee/BilletterieBundle/Controller/FormulaireController.php

namespace Musee\BilletterieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Musee\BilletterieBundle\Entity\Commande;
use Musee\BilletterieBundle\Entity\LigneCommande;
use Musee\BilletterieBundle\Form\Type\FormBilletterieGeneral;
use Doctrine\Common\Collections\ArrayCollection;

class FormulaireController extends Controller {

    public function indexAction(Request $request) {
        //$antispam = $this->container->get('musee_billetterie.prix');
   $prix = $this->container->get('musee_billetterie.prix');


echo $prix->calculePrix('1990/03/10', '2017/01/01');
        // Je pars du principe que $text contient le texte d'un message quelconque


// Output the microseconds.

        $text = 'ffff';
// return $this->render('MuseeBilletterieBundle:Formulaire:index.html.twig', array('init' => 1,));
       // if ($antispam->isSpam($text)) {echo $text;    }  
    }
public function viewAction(Request $request)      
{
    
    
    
}
    public function addAction(Request $request) {

        $cmd = new Commande();
        $visiteurs = new ArrayCollection();
        $editForm = $this->createForm(FormBilletterieGeneral::class, $cmd);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            foreach ($cmd->getLigneCommande() as $visiteur) {
                $visiteurs->add($visiteur);
            }
            $em = $this->getDoctrine()->getManager();
            if (isset($visiteurs[0])) {
                // add the relationship between the tag and the Task
                foreach ($visiteurs as $visiteur) {
                   
                        $visiteur->setCommande($cmd);
                        $em->persist($visiteur);
                    
                }
                $em->persist($cmd);
                $em->flush();
                // Vu après validation
                
                    $id=$editForm->getData()->getId();
                    return $this->redirectToRoute('edit_form', array('id' => $id));
               // return $this->render('MuseeBilletterieBundle:Formulaire:index.html.twig', array( 'init' => 1,));
            }
            // Vu formulaire visiteurs
            $data = $editForm->getData();

            return $this->render('MuseeBilletterieBundle:Formulaire:visiteurs1.html.twig', array('form' => $editForm->createView(), 'init' => 1,
                        'quantite' => $data->getQuantite(), 'date' => $data->getDate(), 'email' => $data->getEmail(), 'type' => $data->getType(),));
        }
        // Vu form général
        return $this->render('MuseeBilletterieBundle:Formulaire:index.html.twig', array('form' => $editForm->createView(), 'init' => 1,));
        // render some form template
    }

    public function editAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $cmd = $em->getRepository('MuseeBilletterieBundle:Commande')->find($id);
        $visiteurs=$em->getRepository('MuseeBilletterieBundle:LigneCommande')->findBy(array('commande' => $cmd));
        if (!$cmd) { throw $this->createNotFoundException('No task found for id ' . $id); }
                
        $prix = $this->container->get('musee_billetterie.prix');
     
        $cmd->setLigneCommande($visiteurs);
        foreach ($cmd->getLigneCommande() as $visiteur) {   
               
             
        $prix=$prix->calculePrix($visiteur->getBorn(), $cmd->getDate(), $visiteur->getTarifReduit());
          
        $visiteur->setTarif($prix);
          
            
          
               }
               
   
                $em->persist($cmd);
                $em->flush();
             var_dump($cmd);
              
              
              
        
       //$cmd->setLigneCommande($originalTags);
        
   // $visiteurs->setCommande(null);
      //  foreach ($visiteurs as $visiteur) {   $originalTags->add($visiteur); }

        //    if (isset($originalTags[0])) {
                // add the relationship between the tag and the Task
          //      foreach ($originalTags as $visiteur) {
            //        if (null === $cmd->getLigneCommande()) {
              //          $cmd->setLigneCommande($visiteur);
              
                //    }
        
        
        
        
        
        $editForm = $this->createForm(FormBilletterieGeneral::class, $cmd);
        $editForm->handleRequest($request);

  


        return $this->render('MuseeBilletterieBundle:Formulaire:panier.html.twig', array('form' => $editForm->createView(), 'init' => 1,));
        // render some form template
    }

}

?>