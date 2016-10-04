<?php

namespace Musee\BilletterieBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Musee\BilletterieBundle\Services\Validator\DateReservation;
use Musee\BilletterieBundle\Services\Validator\QuantiteRestante;
use Musee\BilletterieBundle\Services\Validator\Type;


/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="Musee\BilletterieBundle\Repository\CommandeRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Commande {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
 * @ORM\OneToMany(targetEntity="Musee\BilletterieBundle\Entity\LigneCommande", cascade={"persist"}, mappedBy="commande" )
 */
    private $ligneCommande;
    
    
    /**
     * @var string
     * @ORM\Column(name="date", type="string", length=255)
     * @DateReservation{message=""}
    )
     */
    private $date;

   
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     * @Type{message=""}
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\Email(
     *     message = "L adresse email '{{ value }} n'est pas valide attention elle sera utiliser pour l'envoie des billets",
     *     checkMX = true)
     */
    private $email;

/**
     * @var int
     *
     * @ORM\Column(name="prixTotal", type="integer")
     */
    private $prixTotal;
    
    
    /**
      * @var bool
      * 
      * @ORM\Column(name="paiement", type="boolean")
      */
    private $paiement;

    /**
     * @var string
     * @QuantiteRestante{message="d"}
     * @ORM\Column(name="quantite", type="string", length=255)
     */
    private $quantite;
    
     /**
     * @var string
     * @ORM\Column(name="token", type="string", length=255, nullable=true)
     */
    private $token;
    
       
    
    

  public function __construct()
    {
        $this->ligneCommande = new ArrayCollection();
        $this->paiement = false;
        $this->prixTotal = 0;
        $this->token = null;
    }

    
 
     public function removeLigneCommande(LigneCommande $ligneCommande)
    {
        $this->ligneCommande->removeElement($ligneCommande);
    }
    
     public function addLigneCommande(LigneCommande $ligneCommande)
    {
        $this->ligneCommande->add($ligneCommande);
    }
 
    

    
     public function setLigneCommande($ligneCommande)
    {
    
        $this->ligneCommande=$ligneCommande;
        return $ligneCommande;
        
    }

    /**
     * Add type
     *
     * @param int $prix
     *
     * @return Commande
     */
    
  
    public function addPrixTotal($prix)
    {
        
        
        $this->prixTotal += $prix;
        
        return $this;
        
    }
    
    
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Commande
     */
    public function setDate($date) {

        $this->date = $date;


        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Commande
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Commande
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Commande
     */
    public function setToken($token) {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken() {
        return $this->token;
    }

    /**
     * Set prixTotal
     *
     * @param string $prixTotal
     *
     * @return Commande
     */
    public function setPrixTotal($prixTotal) {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return string
     */
    public function getPrixTotal() {
        return $this->prixTotal;
    }

   
    /**
     * Set quantite
     *
     * @param string quantite
     *
     * @return Commande
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return string
     */
    public function getQuantite() {
        return $this->quantite;
    }



    /**
     * Get ligneCommande
     *
     * @return string
     */
    public function getLigneCommande()
    {
        return $this->ligneCommande;
    }

    /**
     * Set paiement
     *
     * @param boolean $paiement
     *
     * @return Commande
     */
    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;

        return $this;
    }

    /**
     * Get paiement
     *
     * @return boolean
     */
    public function getPaiement()
    {
        return $this->paiement;
    }
}
