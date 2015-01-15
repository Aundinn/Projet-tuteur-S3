<?php

namespace PR2L\SiteBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * menu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PR2L\SiteBundle\Entity\Entity\menuRepository")
 */
class menu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="idMenuParent", type="integer")
     */
    private $idMenuParent;

    /**
     * @var string
     *
     * @ORM\Column(name="lien7", type="string", length=255)
     */
    private $lien7;


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
     * Set libelle
     *
     * @param string $libelle
     * @return menu
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set idMenuParent
     *
     * @param integer $idMenuParent
     * @return menu
     */
    public function setIdMenuParent($idMenuParent)
    {
        $this->idMenuParent = $idMenuParent;

        return $this;
    }

    /**
     * Get idMenuParent
     *
     * @return integer 
     */
    public function getIdMenuParent()
    {
        return $this->idMenuParent;
    }

    /**
     * Set lien7
     *
     * @param string $lien7
     * @return menu
     */
    public function setLien7($lien7)
    {
        $this->lien7 = $lien7;

        return $this;
    }

    /**
     * Get lien7
     *
     * @return string 
     */
    public function getLien7()
    {
        return $this->lien7;
    }
}