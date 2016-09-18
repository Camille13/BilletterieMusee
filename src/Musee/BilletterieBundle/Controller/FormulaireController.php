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

    public function indexAction() {
        $content = $this->get('templating')->render('MuseeBilletterieBundle:Formulaire:index.html.twig');
        return new Response($content);
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
                    if (true === $cmd->getLigneCommande()->contains($visiteur)) {
                        $visiteur->setCommande($cmd);
                        $em->persist($visiteur);
                    }
                }
                $em->persist($cmd);
                $em->flush();
                // Vu après validation
                return $this->render('MuseeBilletterieBundle:Formulaire:index.html.twig', array( 'init' => 1,));
            }
            // Vu formulaire visiteurs
            $data=$editForm->getData();
                       
            return $this->render('MuseeBilletterieBundle:Formulaire:visiteurs1.html.twig', array('form' => $editForm->createView(), 'init' => 1,
                        'quantite' => $data->getQuantite(), 'date' => $data->getDate(), 'email' => $data->getEmail(), 'type' => $data->getType(),));
        }
        // Vu form général
        return $this->render('MuseeBilletterieBundle:Formulaire:index.html.twig', array('form' => $editForm->createView(), 'init' => 1,));
        // render some form template
    }
    
    
    
    

    public function editAction ($id, Request $request) {   
            $em = $this->getDoctrine()->getManager(); 
      $task = $em->getRepository('MuseeBilletterieBundle:Commande')->find($id);
    if (!$task) { throw $this->createNotFoundException('No task found for id '.$id);    }
    $originalTags = new ArrayCollection();
          // Create an ArrayCollection of the current Tag objects in the database
    foreach ($task->getLigneCommande() as $tag) {        $originalTags->add($tag);    }
    $editForm = $this->createForm(FormBilletterieGeneral::class, $task);
    $editForm->handleRequest($request);
         
    if ($editForm->isValid()) {
        // remove the relationship between the tag and the Task
        foreach ($originalTags as $tag) {
            if (false === $task->getLigneCommande()->contains($tag)) {
                // remove the Task from the Tag
                $tag->setCommande(null);

                // if it was a many-to-one relationship, remove the relationship like this
                // $tag->setTask(null);

                $em->persist($tag);

                // if you wanted to delete the Tag entirely, you can also do that
                // $em->remove($tag);
            }
        }
        $em->persist($task);
        $em->flush();
        // redirect back to some edit page
        return $this->redirectToRoute('edit_form', array('id' => $id));
    }
    
    
 return $this->render('MuseeBilletterieBundle:Formulaire:visiteurs.html_1.twig', array('form' => $editForm->createView(), 'init' => 1,));
    // render some form template
}  
                
                

}

?>