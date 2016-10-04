<?php

// src/Musee/BilletterieBundle/Services/Validator/QuantiteRestanteValidator.php

namespace Musee\BilletterieBundle\Services\Validator;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class QuantiteRestanteValidator extends ConstraintValidator {

    private $requestStack;
    private $em;

    // Les arguments déclarés dans la définition du service arrivent au constructeur
    // On doit les enregistrer dans l'objet pour pouvoir s'en resservir dans la méthode validate()
    public function __construct(RequestStack $requestStack, EntityManagerInterface $em) {
        $this->requestStack = $requestStack;
        $this->em = $em;
    }

    private function quantite($date) {
        $query = $this->em->createQuery(
                        'SELECT c.date, SUM(c.quantite) as total
    FROM MuseeBilletterieBundle:Commande c
    WHERE c.date = :date
    GROUP BY c.date')->setParameter('date', $date);

        $qteBilletVendu = $query->getResult();

        // METTRE EN PARAM
        $qteMax = 1000;
        if ($qteBilletVendu) {
            $total = $qteBilletVendu[0]['total'];
            $reste = $qteMax - $total;
        } else {
            $reste = 1000;
        }
        return $reste;
    }

    public function validate($value, Constraint $constraint) {

        $date = $this->context->getObject()->getDate();

        $reste = $this->quantite($date);
        if ($reste < $value) {
            // C'est cette ligne qui déclenche l'erreur pour le formulaire, avec en argument le message
            $this->context->buildViolation($constraint->message)->setParameters(array('%reste%' => 'Vous ne pouvez pas réservez ' . $value . 'billet(s). Il reste ' . $reste . ' de place(s) pour le ' . $date . ''))->addViolation();
        }
    }

}
