<?php

namespace Musee\BilletterieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneCommande
 *
 * @ORM\Table(name="ligne_commande")
 * @ORM\Entity(repositoryClass="Musee\BilletterieBundle\Repository\LigneCommandeRepository")
 */
class LigneCommande
{    
      /**
   * @ORM\ManyToOne(targetEntity="Musee\BilletterieBundle\Entity\Commande", cascade={"remove"}, inversedBy="ligneCommande")
   * @ORM\JoinColumn(nullable=false, onDelete="cascade")
   */
    
private $commande;
      /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var date
     *
     * @ORM\Column(name="born", type="date")
     */
    private $born;

    /**
     * @var bool
     *
     * @ORM\Column(name="tarifReduit", type="boolean")
     */
    private $tarifReduit;

/**
     * @var int
     *
     * @ORM\Column(name="tarif", type="integer")
     */
    private $tarif=0;
    
     /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;
    
  


    
public function addCommande(Commande $commande)
{
    if (!$this->commande->contains($commande)) {
        $this->commande->set($commande);
    }
}
    
      
     public function setCommande(Commande $commande)
  {
    $this->commande = $commande;

    return $this;
  }

  public function getCommande()
  {
    return $this->commande;
  }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return LigneCommande
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return LigneCommande
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set born
     *
     * @param string $born
     *
     * @return LigneCommande
     */
    public function setBorn($born)
    {
        $this->born = $born;

        return $this;
    }

    /**
     * Get born
     *
     * @return string
     */
    public function getBorn()
    {
        return $this->born;
    }

    /**
     * Set tarifReduit
     *
     * @param boolean $tarifReduit
     *
     * @return LigneCommande
     */
    public function setTarifReduit($tarifReduit)
    {
        $this->tarifReduit = $tarifReduit;

        return $this;
    }

    /**
     * Get tarifReduit
     *
     * @return bool
     */
    public function getTarifReduit()
    {
        return $this->tarifReduit;
    }

  
   

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tarif
     *
     * @param integer $tarif
     *
     * @return LigneCommande
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return integer
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return LigneCommande
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }
}
