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
   * @ORM\ManyToOne(targetEntity="Musee\BilletterieBundle\Entity\Commande", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="born", type="string", length=255)
     */
    private $born;

    /**
     * @var string
     *
     * @ORM\Column(name="tarifReduit", type="string")
     */
    private $tarifReduit;


    

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
}
