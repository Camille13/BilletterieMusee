<?php

namespace Musee\BilletterieBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="Musee\BilletterieBundle\Repository\CommandeRepository")
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



    private $ligneCommande;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

   
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;



  

    /**
     * @var string
     *
     * @ORM\Column(name="quantite", type="string", length=255)
     */
    private $quantite;

  public function __construct()
    {
        $this->ligneCommande = new ArrayCollection();
    }

    
 
     public function removeLigneCommande(LigneCommande $ligneCommande)
    {
        $this->ligneCommande->removeElement($ligneCommande);
    }
    
    
        public function addLigneCommande(LigneCommande $ligneCommande)
    {
            
        $ligneCommande->add($this);
        $this->ligneCommande->add($ligneCommande);
       
    }
    

    
     public function setLigneCommande($ligneCommande)
    {
    
        $this->ligneCommande=$ligneCommande;
        return $ligneCommande;
        
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
     * Set ligneCommande
     *
     * @param string $ligneCommande
     *
     * @return Commande
     */


    /**
     * Get ligneCommande
     *
     * @return string
     */
    public function getLigneCommande()
    {
        return $this->ligneCommande;
    }
}
