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
    * @var Document $documents
    * @ORM\ManyToMany(targetEntity="PR2L\SiteBundle\Entity\Document", cascade={"persist"})
    */
    private $documents;
    
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
     * setDocument
     *
     * @param Document $document
     */
    public function addDocument(Document $document)
    {
        $this->documents[] = $document;

    return $this;
    }
     
    /**
     * getDocuments
     *
     * @return array $documents
     */
    public function getDocuments()
    {
        return $this->documents;
    }

}
