<?php
// src/Musee/BilletterieBundle/Services/Validator/Type.php

namespace Musee\BilletterieBundle\Services\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Type extends Constraint
{
  public $message = "%reste%";
  
  
    public function validatedBy()

  {

    return 'musee_billetterie_type'; // Ici, on fait appel à l'alias du service

  }
}

  
