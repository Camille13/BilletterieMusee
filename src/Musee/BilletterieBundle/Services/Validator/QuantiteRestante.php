<?php
// src/Musee/BilletterieBundle/Services/Validator/QuantiteRestante.php

namespace Musee\BilletterieBundle\Services\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class QuantiteRestante extends Constraint
{
  public $message = "%reste%";
  
  
    public function validatedBy()

  {

    return 'musee_billetterie_quantiteRestante'; // Ici, on fait appel à l'alias du service

  }
}

  
