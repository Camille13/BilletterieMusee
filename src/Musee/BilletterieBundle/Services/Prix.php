<?php

// src/Musee/BilletterieBundle/Services/Prix.php

namespace Musee\BilletterieBundle\Services;

class Prix {

    private $prix_normal;
    private $prix_senior;
    private $prix_enfant;
    private $prix_reduit;

    public function __construct($prix_normal, $prix_senior, $prix_enfant, $prix_reduit) {
        $this->prix_normal = $prix_normal;
        $this->prix_senior = $prix_senior;
        $this->prix_enfant = $prix_enfant;
        $this->prix_reduit = $prix_reduit;
    }

    /**

     * Calcule l'age de du visteur au moment de la visite
     * @param date $dateNaissance
     * @param date $dateReservation

     * @return int

     */
    public static function calculeAge($dateNaissance, $dateReservation) {

        $age = date("Y-m-d", strtotime($dateReservation)) - ($dateNaissance->format('Y-m-d'));
        return $age;
    }

    /**

     * Calcule le prix par visiteur

     *
     * @param date $dateNaissance
     * @param date $dateReservation
     * @param int $reduit
     * @return int

     */
    public function calculePrix($dateNaissance, $dateReservation, $reduit) {
        $age = self::calculeAge($dateNaissance, $dateReservation);

        if ($age < 4) {
            $prix = 0;
        }
        if ($age > 4) {
            if ($age < 12) {
                $prix = $this->prix_enfant;
            }
            if ($age >= 12) {
                if ($age >= 60) {
                    $prix = $this->prix_senior;
                } else {
                    $prix = $this->prix_normal;
                }
            }
        }
        if ($reduit === true) {
            if ($prix > $this->prix_reduit) {
                $prix = $this->prix_reduit;
            }
        }
        return $prix;
    }

}
