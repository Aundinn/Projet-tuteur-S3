<?php

namespace PR2L\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="PR2L\SiteBundle\Entity\DocumentRepository")
 */
class Document
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=255)
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var datetime
     *
     * @ORM\Column(name="jourHeure", type="datetime")
     */
    private $jourHeure;

    /**
     * @ORM\ManyToMany(targetEntity="Image", cascade={"persist"})
     */
    private $images;
    
    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;

    public function __construct() {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
        $this->jourHeure = new \DateTime('now');
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
     * Set type
     *
     * @param string $type
     * @return Document
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }
    
    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * Set template
     *
     * @param string $template
     * @return Document
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    
        return $this;
    }
    
    /**
     * Get template
     *
     * @return string 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Document
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
     * Set auteur
     *
     * @param string $auteur
     * @return Document
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Document
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;
    
        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }


    /**
     * Add images
     *
     * @param \PR2L\SiteBundle\Entity\Image $images
     * @return Document
     */
    public function addImage(\PR2L\SiteBundle\Entity\Image $images)
    {
        $this->images[] = $images;
    
        return $this;
    }

    /**
     * Remove images
     *
     * @param \PR2L\SiteBundle\Entity\Image $images
     */
    public function removeImage(\PR2L\SiteBundle\Entity\Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }
    
    /**
     * Set images
     *
     * @param \Doctrine\Common\Collections\Collection $images
     */
    public function setDeskComment(\Doctrine\Common\Collections\Collection $images)
    {
        $this->images = $images;
    }

    /**
     * Set jourHeure
     *
     * @param \DateTime $jourHeure
     * @return Document
     */
    public function setJourHeure($jourHeure)
    {
        $this->jourHeure = $jourHeure;
    
        return $this;
    }

    /**
     * Get jourHeure
     *
     * @return \DateTime 
     */
    public function getJourHeure()
    {
        return $this->jourHeure;
    }
}
