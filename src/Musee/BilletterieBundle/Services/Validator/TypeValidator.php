<?php

// src/Musee/BilletterieBundle/Services/Validator/TypeValidator.php

namespace Musee\BilletterieBundle\Services\Validator;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;



class TypeValidator extends ConstraintValidator {




public function journee()
{
    if(date("h") > date("h", strtotime('14'))){return false;}
    else {return true;}
    
}


    public function validate($value, Constraint $constraint) {
        if($value == 'J'){
        $now=date("d-m-Y");
        $date=$this->context->getObject()->getDate();
        if ($date == $now )
        {
         if(!$this->journee())
         {
             
          $this->context->buildViolation($constraint->message)->setParameters(array('%reste%' => 'Il est plus de 14h00 vous ne pouvez plus réserver la journée complète sélectionner demi-journée'))->addViolation();    
             
         }
            
        }
        
     
 
          
    }

}}
