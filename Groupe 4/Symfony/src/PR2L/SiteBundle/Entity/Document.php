<?php

namespace PR2L\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\Column(name="template", type="string", length=255)
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=255)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;
    
    /**
    * @var Element $elements
    * @ORM\ManyToMany(targetEntity="PR2L\SiteBundle\Entity\Element", cascade={"persist"})
    */
    private $elements;
    
    public function __toString()
    {
        return $this->elements;
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
     * Set theme
     *
     * @param string $theme
     * @return Document
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    
        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
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
    
    public function __construct()
    {
        $this->elements = new ArrayCollection();
    }
    
    /**
    * setElement
    *
    * @param Element $element
    */
    public function addElement(Element $element)
    {
        $this->elements[] = $element;

    return $this;
    }
     
    /**
    * getElements
    *
    * @return array $elements
    */
    public function getElements()
    {
        return $this->elements;
    }
    
}
