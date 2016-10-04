<?php

// src/Musee/BilletterieBundle/Services/Validator/DateReservationValidator.php

namespace Musee\BilletterieBundle\Services\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class DateReservationValidator extends ConstraintValidator {





    private function jourOff($value) {
        $date = date("N", strtotime($value));
        if ($date == 2 || $date == 7) {
            return true;
        } else {
            return false;
        }
    }

    private function jourFerie($value) {
        $isferie = false;
        $datemois = date("d-m", strtotime($value));
        $ferie[] = "01-01";
        $ferie[] = "01-05";
        $ferie[] = "08-05";
        $ferie[] = "14-07";
        $ferie[] = "15-08";
        $ferie[] = "01-11";
        $ferie[] = "11-11";
        $ferie[] = "25-12";
        foreach ($ferie as $jour) {
            if ($datemois == $jour) {
                $isferie = true;
            }
        }
        return $isferie;
    }

    private function noReservable($value) {
        if ($this->jourOff($value)) {
            return true;
        } else {
            if ($this->jourFerie($value)) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function validate($value, Constraint $constraint) {
        $isJNoReservable = $this->noReservable($value);
            if ($isJNoReservable) {
            // C'est cette ligne qui déclenche l'erreur pour le formulaire, avec en argument le message
            $this->context->buildViolation($constraint->message)->setParameters(array('%date%' => $value . ', le musée est fermé le mardi, le dimanche et les jours fériés'))->addViolation();
        }
        }}
    


