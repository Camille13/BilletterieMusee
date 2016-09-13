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
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    
    
      /**
   * @ORM\ManyToOne(targetEntity="Musee\BilletterieBundle\Entity\Commande")
   * @ORM\JoinColumn(nullable=false)
   */
    
private $commande;
    /**
     * @var int
     *
     * @ORM\Column(name="commande_id", type="integer")
     */
    private $commande_id;

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
     * @var bool
     *
     * @ORM\Column(name="tarif_reduit", type="boolean")
     */
    private $tarifReduit;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     * Set commandeId
     *
     * @param integer $commandeId
     *
     * @return LigneCommande
     */
    public function setCommandeId($commandeId)
    {
        $this->commande_id = $commandeId;

        return $this;
    }

    /**
     * Get commandeId
     *
     * @return integer
     */
    public function getCommandeId()
    {
        return $this->commande_id;
    }

    /**
     * Set commande
     *
     * @param \Musee\BilletterieBundle\Entity\Commande $commande
     *
     * @return LigneCommande
     */
    public function setCommande(\Musee\BilletterieBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \Musee\BilletterieBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }
}
