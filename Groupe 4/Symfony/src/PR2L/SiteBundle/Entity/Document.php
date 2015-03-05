<?php

namespace PR2L\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table()
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="imageBanniere", type="string", length=255, nullable=true)
     */
    private $imageBanniere;

    /**
     * @var string
     *
     * @ORM\Column(name="imageCoin", type="string", length=255, nullable=true)
     */
    private $imageCoin;

    /**
     * @var string
     *
     * @ORM\Column(name="imagesCarousel", type="text", nullable=true)
     */
    private $imagesCarousel;

    public function __construct() {
        $this->auteur = "moi";
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
     * Set date
     *
     * @param string $date
     * @return Document
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
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
     * Set imageBanniere
     *
     * @param string $imageBanniere
     * @return Document
     */
    public function setImageBanniere($imageBanniere)
    {
        $this->imageBanniere = $imageBanniere;
    
        return $this;
    }

    /**
     * Get imageBanniere
     *
     * @return string 
     */
    public function getImageBanniere()
    {
        return $this->imageBanniere;
    }

    /**
     * Set imageCoin
     *
     * @param string $imageCoin
     * @return Document
     */
    public function setImageCoin($imageCoin)
    {
        $this->imageCoin = $imageCoin;
    
        return $this;
    }

    /**
     * Get imageCoin
     *
     * @return string 
     */
    public function getImageCoin()
    {
        return $this->imageCoin;
    }

    /**
     * Set imagesCarousel
     *
     * @param string $imagesCarousel
     * @return Document
     */
    public function setImagesCarousel($imagesCarousel)
    {
        $this->imagesCarousel = $imagesCarousel;
    
        return $this;
    }

    /**
     * Get imagesCarousel
     *
     * @return string 
     */
    public function getImagesCarousel()
    {
        return $this->imagesCarousel;
    }
}
