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
       $quantite=$commande->getQuantite();  
       $visiteur1 = new LigneCommande();
        $visiteur1->setNom($quantite);
        $commande->getLigneCommande()->add($visiteur1);
        //$visiteur2 = new LigneCommande();
        //$commande->getLigneCommande()->add($visiteur2);
        $form = $this->createForm(FormBilletterieGeneral::class, $commande);
        $form->handleRequest($request);

        if ($form->isValid()) {    echo $quantite;        }

return $this->render('MuseeBilletterieBundle:Formulaire:index.html.twig', array('form' => $form->createView(), 'init' => 1, )); 
  
}
}?>