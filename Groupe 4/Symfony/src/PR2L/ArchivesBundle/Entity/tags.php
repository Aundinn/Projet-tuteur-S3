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
     * @ORM\Column(name="identifiantArchive", type="integer")
     */
    private $identifiantArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="motCle", type="string", length=255)
     */
    private $motCle;


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
     * Set identifiantArchive
     *
     * @param integer $identifiantArchive
     * @return tags
     */
    public function setIdentifiantArchive($identifiantArchive)
    {
        $this->identifiantArchive = $identifiantArchive;

        return $this;
    }

    /**
     * Get identifiantArchive
     *
     * @return integer 
     */
    public function getIdentifiantArchive()
    {
        return $this->identifiantArchive;
    }

    /**
     * Set motCle
     *
     * @param string $motCle
     * @return tags
     */
    public function setMotCle($motCle)
    {
        $this->motCle = $motCle;

        return $this;
    }

    /**
     * Get motCle
     *
     * @return string 
     */
    public function getMotCle()
    {
        return $this->motCle;
    }
}
