<?php 
// src/OC/PlatformBundle/Controller/AdvertController.php


namespace OC\PlateformBundle\Controller;


// N'oubliez pas ce use :

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;


class AdvertController extends Controller

{ 



    public function viewSlugAction($slug, $year, $format)
    {
        return new Response("On pourrait afficher l'annonce correspondant au slug '".$slug."', créée en ".$year." et au format ".$format.".");
    }
 public function viewAction($id)

  {
    return new Response("Affichage de l'annonce d'id : ".$id);

  }

  public function indexAction()

  {

    $content = $this->get('templating')->render('OCPlateformBundle:Advert:index.html.twig');

    

    return new Response($content);

  }
   // On récupère tous les paramètres en arguments de la méthode

}?>