<?php

// src/Musee/BilletterieBundle/Services/Billets.php
namespace Musee\BilletterieBundle\Services;

use Symfony\Component\HttpFoundation\Response;



class Billets

{
  

  /**

   * Calcule l'age de du visteur au moment de la visite

   *

   * @param date $dateNaissance
   * @param date $dateReservation

   * @return int

   */
 
  private function getBillets($html)
  {
     return new Response(
    $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
    200,
    array(
        'Content-Type'          => 'application/pdf',
        'Content-Disposition'   => 'attachment; filename="file.pdf"'
    )
);
    
  }

 
}