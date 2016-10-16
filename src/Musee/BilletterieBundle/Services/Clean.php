<?php

// src/Musee/BilletterieBundle/Services/Clean.php

namespace Musee\BilletterieBundle\Services;

use Doctrine\ORM\EntityManagerInterface;

class Clean {

    private $em;
    
    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }
    
    public function listePaiementAnnule(){

   $query = $this->em->createQuery('SELECT COUNT(c.id) AS test FROM MuseeBilletterieBundle:Commande c WHERE c.paiement = 0 AND c.dateCommande < :date GROUP BY c.id')->setParameter(':date', $this->timeOut());
   $result=$query->getScalarResult();
   return  $result[0]['test']; 
    }
    

    private  function timeOut() {
        $dateObject = new \DateTime();
        return $dateObject->add(new \DateInterval('PT3M'))->format("Y-m-d H:m:s");
    }

    public function suppLigneCommande() {
       
        $query = $this->em->createQuery('DELETE FROM MuseeBilletterieBundle:Commande c WHERE c.paiement = 0 AND c.dateCommande > :date')->setParameter(':date', $this->timeOut());
        $query->getResult();
    }

}
