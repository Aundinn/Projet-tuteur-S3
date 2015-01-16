<?php

namespace PR2L\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PR2L\MenuBundle\Entity\MenuRepository")
 */
class Menu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPere", type="integer")
     */
    private $idPere;

    /**
     * @var string
     *
     * @ORM\Column(name="representation", type="string", length=255)
     */
    private $representation;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=255)
     */
    private $lien;


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
     * Set titre
     *
     * @param string $titre
     * @return Menu
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set idPere
     *
     * @param integer $idPere
     * @return Menu
     */
    public function setIdPere($idPere)
    {
        $this->idPere = $idPere;
    
        return $this;
    }

    /**
     * Get idPere
     *
     * @return integer 
     */
    public function getIdPere()
    {
        return $this->idPere;
    }

    /**
     * Set representation
     *
     * @param string $representation
     * @return Menu
     */
    public function setRepresentation($representation)
    {
        $this->representation = $representation;
    
        return $this;
    }

    /**
     * Get representation
     *
     * @return string 
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * Set lien
     *
     * @param string $lien
     * @return Menu
     */
    public function setLien($lien)
    {
        $this->lien = $lien;
    
        return $this;
    }

    /**
     * Get lien
     *
     * @return string 
     */
    public function getLien()
    {
        return $this->lien;
    }
}
