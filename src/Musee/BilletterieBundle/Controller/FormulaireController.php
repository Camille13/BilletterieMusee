<?php 
// src/Musee/BilletterieBundle/Controller/FormulaireController.php


namespace Musee\BilletterieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Musee\BilletterieBundle\Entity\Commande;
use Musee\BilletterieBundle\Entity\LigneCommande;
use Musee\BilletterieBundle\Form\Type\FormBilletterieGeneral;
use Musee\BilletterieBundle\Form\Type\FormBilletterieVisiteur;

class FormulaireController extends Controller
{

 public function indexAction()
{
$content = $this->get('templating')->render('MuseeBilletterieBundle:Formulaire:index.html.twig');
return new Response($content);
}
    
public function addAction(Request $request)
{
    
    
     $commande = new Commande();  
       
     $form = $this->createForm(FormBilletterieGeneral::class, $commande);

    
if ($request->isMethod('POST')) {
      $form->handleRequest($request);
      if ($form->isValid()) {
       //$em = $this->getDoctrine()->getManager();
       //$em->persist($commande);
      
        //$em->flush();
       // $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
        // On redirige vers la page de visualisation de l'annonce nouvellement créée
  $quantite=$commande->getQuantite();

  for($i = 1; $i <= $quantite; $i++)
  {
         ${'$visiteur_'.$i}= new LigneCommande();
         $commande->getLigneCommande()->add(${'$visiteur_'.$i});
    
  }
        $form = $this->createForm(FormBilletterieGeneral::class, $commande);
        
        
        
        
//return $this->render('MuseeBilletterieBundle:Formulaire:index.html.twig', array('form' => $form->createView(), 'init' => $commande->getQuantite(), )); 
return $this->render('MuseeBilletterieBundle:Formulaire:visiteurs.html.twig', array('form' => $form->createView(), 'init' => 1, )); 
      }

    }
return $this->render('MuseeBilletterieBundle:Formulaire:index.html.twig', array('form' => $form->createView(), 'init' => 1, )); 
  
}
}?>