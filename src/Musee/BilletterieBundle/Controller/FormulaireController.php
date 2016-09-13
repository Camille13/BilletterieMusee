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
$cmd = new Commande();
$form = $this->createForm(FormBilletterieGeneral::class, $cmd);
$form=$form->createView();	

$visiteur = new LigneCommande();
$formV = $this->createForm(FormBilletterieVisiteur::class, $visiteur);
$formV=$formV->createView();	

return $this->render('MuseeBilletterieBundle:Formulaire:index.html.twig', array('form' => $form, 'formV' => $formV, )); 
  
}
}?>