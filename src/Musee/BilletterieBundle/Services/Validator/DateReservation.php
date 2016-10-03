<?php
// src/Musee/BilletterieBundle/Services/Validator/DateReservation.php

namespace Musee\BilletterieBundle\Services\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class DateReservation extends Constraint
{
  public $message = "Vous ne pouvez pas réservez le %date%";
  
  
    public function validatedBy()

  {

    return 'musee_billetterie_dateReservation'; // Ici, on fait appel à l'alias du service

  }
}

  
