<?php

namespace PR2L\ArchivesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * archive
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PR2L\ArchivesBundle\Entity\archiveRepository")
 */
class archive
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
     * @ORM\Column(name="nomFond", type="string", length=255)
     */
    private $nomFond;

    /**
     * @var string
     *
     * @ORM\Column(name="depFond", type="string", length=255)
     */
    private $depFond;

    /**
     * @var string
     *
     * @ORM\Column(name="villeFond", type="string", length=255)
     */
    private $villeFond;

    /**
     * @var string
     *
     * @ORM\Column(name="adrFond", type="string", length=255)
     */
    private $adrFond;

    /**
     * @var string
     *
     * @ORM\Column(name="histFond", type="string", length=1024)
     */
    private $histFond;

    /**
     * @var string
     *
     * @ORM\Column(name="titreArchive", type="string", length=255)
     */
    private $titreArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="resArchive", type="string", length=2048)
     */
    private $resArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="grEntrArchive", type="string", length=255)
     */
    private $grEntrArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="obsArchive", type="string", length=1024)
     */
    private $obsArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="coteArchive", type="string", length=255)
     */
    private $coteArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="classArchive", type="string", length=255)
     */
    private $classArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="typeArchive", type="string", length=255)
     */
    private $typeArchive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ancPubArchive", type="datetime")
     */
    private $ancPubArchive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="recPubArchive", type="datetime")
     */
    private $recPubArchive;

    /**
     * @var float
     *
     * @ORM\Column(name="metArchive", type="float")
     */
    private $metArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="numArchive", type="string", length=255)
     */
    private $numArchive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRentrArchive", type="datetime")
     */
    private $dateRentrArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="origArchive", type="string", length=1024)
     */
    private $origArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="prodArchive", type="string", length=255)
     */
    private $prodArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="detArchive", type="string", length=255)
     */
    private $detArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="comArchive", type="string", length=255)
     */
    private $comArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="condAccArchive", type="string", length=255)
     */
    private $condAccArchive;


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
     * Set nomFond
     *
     * @param string $nomFond
     * @return archive
     */
    public function setNomFond($nomFond)
    {
        $this->nomFond = $nomFond;

        return $this;
    }

    /**
     * Get nomFond
     *
     * @return string 
     */
    public function getNomFond()
    {
        return $this->nomFond;
    }

    /**
     * Set depFond
     *
     * @param string $depFond
     * @return archive
     */
    public function setDepFond($depFond)
    {
        $this->depFond = $depFond;

        return $this;
    }

    /**
     * Get depFond
     *
     * @return string 
     */
    public function getDepFond()
    {
        return $this->depFond;
    }

    /**
     * Set villeFond
     *
     * @param string $villeFond
     * @return archive
     */
    public function setVilleFond($villeFond)
    {
        $this->villeFond = $villeFond;

        return $this;
    }

    /**
     * Get villeFond
     *
     * @return string 
     */
    public function getVilleFond()
    {
        return $this->villeFond;
    }

    /**
     * Set adrFond
     *
     * @param string $adrFond
     * @return archive
     */
    public function setAdrFond($adrFond)
    {
        $this->adrFond = $adrFond;

        return $this;
    }

    /**
     * Get adrFond
     *
     * @return string 
     */
    public function getAdrFond()
    {
        return $this->adrFond;
    }

    /**
     * Set histFond
     *
     * @param string $histFond
     * @return archive
     */
    public function setHistFond($histFond)
    {
        $this->histFond = $histFond;

        return $this;
    }

    /**
     * Get histFond
     *
     * @return string 
     */
    public function getHistFond()
    {
        return $this->histFond;
    }

    /**
     * Set titreArchive
     *
     * @param string $titreArchive
     * @return archive
     */
    public function setTitreArchive($titreArchive)
    {
        $this->titreArchive = $titreArchive;

        return $this;
    }

    /**
     * Get titreArchive
     *
     * @return string 
     */
    public function getTitreArchive()
    {
        return $this->titreArchive;
    }

    /**
     * Set resArchive
     *
     * @param string $resArchive
     * @return archive
     */
    public function setResArchive($resArchive)
    {
        $this->resArchive = $resArchive;

        return $this;
    }

    /**
     * Get resArchive
     *
     * @return string 
     */
    public function getResArchive()
    {
        return $this->resArchive;
    }

    /**
     * Set grEntrArchive
     *
     * @param string $grEntrArchive
     * @return archive
     */
    public function setGrEntrArchive($grEntrArchive)
    {
        $this->grEntrArchive = $grEntrArchive;

        return $this;
    }

    /**
     * Get grEntrArchive
     *
     * @return string 
     */
    public function getGrEntrArchive()
    {
        return $this->grEntrArchive;
    }

    /**
     * Set obsArchive
     *
     * @param string $obsArchive
     * @return archive
     */
    public function setObsArchive($obsArchive)
    {
        $this->obsArchive = $obsArchive;

        return $this;
    }

    /**
     * Get obsArchive
     *
     * @return string 
     */
    public function getObsArchive()
    {
        return $this->obsArchive;
    }

    /**
     * Set coteArchive
     *
     * @param string $coteArchive
     * @return archive
     */
    public function setCoteArchive($coteArchive)
    {
        $this->coteArchive = $coteArchive;

        return $this;
    }

    /**
     * Get coteArchive
     *
     * @return string 
     */
    public function getCoteArchive()
    {
        return $this->coteArchive;
    }

    /**
     * Set classArchive
     *
     * @param string $classArchive
     * @return archive
     */
    public function setClassArchive($classArchive)
    {
        $this->classArchive = $classArchive;

        return $this;
    }

    /**
     * Get classArchive
     *
     * @return string 
     */
    public function getClassArchive()
    {
        return $this->classArchive;
    }

    /**
     * Set typeArchive
     *
     * @param string $typeArchive
     * @return archive
     */
    public function setTypeArchive($typeArchive)
    {
        $this->typeArchive = $typeArchive;

        return $this;
    }

    /**
     * Get typeArchive
     *
     * @return string 
     */
    public function getTypeArchive()
    {
        return $this->typeArchive;
    }

    /**
     * Set ancPubArchive
     *
     * @param \DateTime $ancPubArchive
     * @return archive
     */
    public function setAncPubArchive($ancPubArchive)
    {
        $this->ancPubArchive = $ancPubArchive;

        return $this;
    }

    /**
     * Get ancPubArchive
     *
     * @return \DateTime 
     */
    public function getAncPubArchive()
    {
        return $this->ancPubArchive;
    }

    /**
     * Set recPubArchive
     *
     * @param \DateTime $recPubArchive
     * @return archive
     */
    public function setRecPubArchive($recPubArchive)
    {
        $this->recPubArchive = $recPubArchive;

        return $this;
    }

    /**
     * Get recPubArchive
     *
     * @return \DateTime 
     */
    public function getRecPubArchive()
    {
        return $this->recPubArchive;
    }

    /**
     * Set metArchive
     *
     * @param float $metArchive
     * @return archive
     */
    public function setMetArchive($metArchive)
    {
        $this->metArchive = $metArchive;

        return $this;
    }

    /**
     * Get metArchive
     *
     * @return float 
     */
    public function getMetArchive()
    {
        return $this->metArchive;
    }

    /**
     * Set numArchive
     *
     * @param string $numArchive
     * @return archive
     */
    public function setNumArchive($numArchive)
    {
        $this->numArchive = $numArchive;

        return $this;
    }

    /**
     * Get numArchive
     *
     * @return string 
     */
    public function getNumArchive()
    {
        return $this->numArchive;
    }

    /**
     * Set dateRentrArchive
     *
     * @param \DateTime $dateRentrArchive
     * @return archive
     */
    public function setDateRentrArchive($dateRentrArchive)
    {
        $this->dateRentrArchive = $dateRentrArchive;

        return $this;
    }

    /**
     * Get dateRentrArchive
     *
     * @return \DateTime 
     */
    public function getDateRentrArchive()
    {
        return $this->dateRentrArchive;
    }

    /**
     * Set origArchive
     *
     * @param string $origArchive
     * @return archive
     */
    public function setOrigArchive($origArchive)
    {
        $this->origArchive = $origArchive;

        return $this;
    }

    /**
     * Get origArchive
     *
     * @return string 
     */
    public function getOrigArchive()
    {
        return $this->origArchive;
    }

    /**
     * Set prodArchive
     *
     * @param string $prodArchive
     * @return archive
     */
    public function setProdArchive($prodArchive)
    {
        $this->prodArchive = $prodArchive;

        return $this;
    }

    /**
     * Get prodArchive
     *
     * @return string 
     */
    public function getProdArchive()
    {
        return $this->prodArchive;
    }

    /**
     * Set detArchive
     *
     * @param string $detArchive
     * @return archive
     */
    public function setDetArchive($detArchive)
    {
        $this->detArchive = $detArchive;

        return $this;
    }

    /**
     * Get detArchive
     *
     * @return string 
     */
    public function getDetArchive()
    {
        return $this->detArchive;
    }

    /**
     * Set comArchive
     *
     * @param string $comArchive
     * @return archive
     */
    public function setComArchive($comArchive)
    {
        $this->comArchive = $comArchive;

        return $this;
    }

    /**
     * Get comArchive
     *
     * @return string 
     */
    public function getComArchive()
    {
        return $this->comArchive;
    }

    /**
     * Set condAccArchive
     *
     * @param string $condAccArchive
     * @return archive
     */
    public function setCondAccArchive($condAccArchive)
    {
        $this->condAccArchive = $condAccArchive;

        return $this;
    }

    /**
     * Get condAccArchive
     *
     * @return string 
     */
    public function getCondAccArchive()
    {
        return $this->condAccArchive;
    }
}
