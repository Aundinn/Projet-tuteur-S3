<?php

namespace PR2L\ArchivesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tags
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PR2L\ArchivesBundle\Entity\tagsRepository")
 */
class tags
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
     * @var integer
     *
     * @ORM\Column(name="idArchive", type="integer")
     */
    private $idArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255)
     */
    private $tag;


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
     * Set idArchive
     *
     * @param integer $idArchive
     * @return tags
     */
    public function setIdArchive($idArchive)
    {
        $this->idArchive = $idArchive;

        return $this;
    }

    /**
     * Get idArchive
     *
     * @return integer 
     */
    public function getIdArchive()
    {
        return $this->idArchive;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return tags
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }
}
