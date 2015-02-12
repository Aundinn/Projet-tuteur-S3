<?php

namespace PR2L\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Element
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PR2L\SiteBundle\Entity\ElementRepository")
 */
class Element
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
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="PR2L\SiteBundle\Entity\Document", inversedBy="elements",cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $document;
    
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
     * @return Element
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
     * Set contenu
     *
     * @param string $contenu
     * @return Element
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set document
     *
     * @param \PR2L\SiteBundle\Entity\Document $document
     * @return Element
     */
    public function setDocument(\PR2L\SiteBundle\Entity\Document $document = null)
    {
        $this->document = $document;
    
        return $this;
    }

    /**
     * Get document
     *
     * @return \PR2L\SiteBundle\Entity\Document 
     */
    public function getDocument()
    {
        return $this->document;
    }
}
