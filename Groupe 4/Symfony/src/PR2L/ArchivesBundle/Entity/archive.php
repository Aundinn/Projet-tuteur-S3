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
     * @ORM\Column(name="nomDuFond", type="string", length=255)
     */
    private $nomDuFond;

    /**
     * @var string
     *
     * @ORM\Column(name="departementDuFond", type="string", length=255)
     */
    private $departementDuFond;

    /**
     * @var string
     *
     * @ORM\Column(name="villeDuFond", type="string", length=255)
     */
    private $villeDuFond;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseCompleteDuFond", type="string", length=255)
     */
    private $adresseCompleteDuFond;

    /**
     * @var string
     *
     * @ORM\Column(name="historiqueDuFond", type="string", length=2048)
     */
    private $historiqueDuFond;

    /**
     * @var string
     *
     * @ORM\Column(name="titreArchive", type="string", length=255)
     */
    private $titreArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=2048)
     */
    private $resume;

    /**
     * @var string
     *
     * @ORM\Column(name="grandesEntrees", type="string", length=255)
     */
    private $grandesEntrees;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="string", length=2048)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="cote", type="string", length=255)
     */
    private $cote;

    /**
     * @var string
     *
     * @ORM\Column(name="classification", type="string", length=255)
     */
    private $classification;

    /**
     * @var string
     *
     * @ORM\Column(name="typeDeDocument", type="string", length=255)
     */
    private $typeDeDocument;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDePublicationLaPlusAncienne", type="date")
     */
    private $dateDePublicationLaPlusAncienne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDePublicationLaPlusRecente", type="date")
     */
    private $dateDePublicationLaPlusRecente;

    /**
     * @var float
     *
     * @ORM\Column(name="metrageLineaire", type="float")
     */
    private $metrageLineaire;

    /**
     * @var string
     *
     * @ORM\Column(name="numerisation", type="string", length=255)
     */
    private $numerisation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeRentreeDansLeFond", type="date")
     */
    private $dateDeRentreeDansLeFond;

    /**
     * @var string
     *
     * @ORM\Column(name="origineArchive", type="string", length=255)
     */
    private $origineArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="producteurArchive", type="string", length=255)
     */
    private $producteurArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="detenteurArchive", type="string", length=255)
     */
    private $detenteurArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="communicabilite", type="string", length=255)
     */
    private $communicabilite;

    /**
     * @var string
     *
     * @ORM\Column(name="ConditionPourYAcceder", type="string", length=2048)
     */
    private $conditionPourYAcceder;


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
     * Set nomDuFond
     *
     * @param string $nomDuFond
     * @return archive
     */
    public function setNomDuFond($nomDuFond)
    {
        $this->nomDuFond = $nomDuFond;

        return $this;
    }

    /**
     * Get nomDuFond
     *
     * @return string 
     */
    public function getNomDuFond()
    {
        return $this->nomDuFond;
    }

    /**
     * Set departementDuFond
     *
     * @param string $departementDuFond
     * @return archive
     */
    public function setDepartementDuFond($departementDuFond)
    {
        $this->departementDuFond = $departementDuFond;

        return $this;
    }

    /**
     * Get departementDuFond
     *
     * @return string 
     */
    public function getDepartementDuFond()
    {
        return $this->departementDuFond;
    }

    /**
     * Set villeDuFond
     *
     * @param string $villeDuFond
     * @return archive
     */
    public function setVilleDuFond($villeDuFond)
    {
        $this->villeDuFond = $villeDuFond;

        return $this;
    }

    /**
     * Get villeDuFond
     *
     * @return string 
     */
    public function getVilleDuFond()
    {
        return $this->villeDuFond;
    }

    /**
     * Set adresseCompleteDuFond
     *
     * @param string $adresseCompleteDuFond
     * @return archive
     */
    public function setAdresseCompleteDuFond($adresseCompleteDuFond)
    {
        $this->adresseCompleteDuFond = $adresseCompleteDuFond;

        return $this;
    }

    /**
     * Get adresseCompleteDuFond
     *
     * @return string 
     */
    public function getAdresseCompleteDuFond()
    {
        return $this->adresseCompleteDuFond;
    }

    /**
     * Set historiqueDuFond
     *
     * @param string $historiqueDuFond
     * @return archive
     */
    public function setHistoriqueDuFond($historiqueDuFond)
    {
        $this->historiqueDuFond = $historiqueDuFond;

        return $this;
    }

    /**
     * Get historiqueDuFond
     *
     * @return string 
     */
    public function getHistoriqueDuFond()
    {
        return $this->historiqueDuFond;
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
     * Set resume
     *
     * @param string $resume
     * @return archive
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set grandesEntrees
     *
     * @param string $grandesEntrees
     * @return archive
     */
    public function setGrandesEntrees($grandesEntrees)
    {
        $this->grandesEntrees = $grandesEntrees;

        return $this;
    }

    /**
     * Get grandesEntrees
     *
     * @return string 
     */
    public function getGrandesEntrees()
    {
        return $this->grandesEntrees;
    }

    /**
     * Set observations
     *
     * @param string $observations
     * @return archive
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string 
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set cote
     *
     * @param string $cote
     * @return archive
     */
    public function setCote($cote)
    {
        $this->cote = $cote;

        return $this;
    }

    /**
     * Get cote
     *
     * @return string 
     */
    public function getCote()
    {
        return $this->cote;
    }

    /**
     * Set classification
     *
     * @param string $classification
     * @return archive
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;

        return $this;
    }

    /**
     * Get classification
     *
     * @return string 
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Set typeDeDocument
     *
     * @param string $typeDeDocument
     * @return archive
     */
    public function setTypeDeDocument($typeDeDocument)
    {
        $this->typeDeDocument = $typeDeDocument;

        return $this;
    }

    /**
     * Get typeDeDocument
     *
     * @return string 
     */
    public function getTypeDeDocument()
    {
        return $this->typeDeDocument;
    }

    /**
     * Set dateDePublicationLaPlusAncienne
     *
     * @param \DateTime $dateDePublicationLaPlusAncienne
     * @return archive
     */
    public function setDateDePublicationLaPlusAncienne($dateDePublicationLaPlusAncienne)
    {
        $this->dateDePublicationLaPlusAncienne = $dateDePublicationLaPlusAncienne;

        return $this;
    }

    /**
     * Get dateDePublicationLaPlusAncienne
     *
     * @return \DateTime 
     */
    public function getDateDePublicationLaPlusAncienne()
    {
        return $this->dateDePublicationLaPlusAncienne;
    }

    /**
     * Set dateDePublicationLaPlusRecente
     *
     * @param \DateTime $dateDePublicationLaPlusRecente
     * @return archive
     */
    public function setDateDePublicationLaPlusRecente($dateDePublicationLaPlusRecente)
    {
        $this->dateDePublicationLaPlusRecente = $dateDePublicationLaPlusRecente;

        return $this;
    }

    /**
     * Get dateDePublicationLaPlusRecente
     *
     * @return \DateTime 
     */
    public function getDateDePublicationLaPlusRecente()
    {
        return $this->dateDePublicationLaPlusRecente;
    }

    /**
     * Set metrageLineaire
     *
     * @param float $metrageLineaire
     * @return archive
     */
    public function setMetrageLineaire($metrageLineaire)
    {
        $this->metrageLineaire = $metrageLineaire;

        return $this;
    }

    /**
     * Get metrageLineaire
     *
     * @return float 
     */
    public function getMetrageLineaire()
    {
        return $this->metrageLineaire;
    }

    /**
     * Set numerisation
     *
     * @param string $numerisation
     * @return archive
     */
    public function setNumerisation($numerisation)
    {
        $this->numerisation = $numerisation;

        return $this;
    }

    /**
     * Get numerisation
     *
     * @return string 
     */
    public function getNumerisation()
    {
        return $this->numerisation;
    }

    /**
     * Set dateDeRentreeDansLeFond
     *
     * @param \DateTime $dateDeRentreeDansLeFond
     * @return archive
     */
    public function setDateDeRentreeDansLeFond($dateDeRentreeDansLeFond)
    {
        $this->dateDeRentreeDansLeFond = $dateDeRentreeDansLeFond;

        return $this;
    }

    /**
     * Get dateDeRentreeDansLeFond
     *
     * @return \DateTime 
     */
    public function getDateDeRentreeDansLeFond()
    {
        return $this->dateDeRentreeDansLeFond;
    }

    /**
     * Set origineArchive
     *
     * @param string $origineArchive
     * @return archive
     */
    public function setOrigineArchive($origineArchive)
    {
        $this->origineArchive = $origineArchive;

        return $this;
    }

    /**
     * Get origineArchive
     *
     * @return string 
     */
    public function getOrigineArchive()
    {
        return $this->origineArchive;
    }

    /**
     * Set producteurArchive
     *
     * @param string $producteurArchive
     * @return archive
     */
    public function setProducteurArchive($producteurArchive)
    {
        $this->producteurArchive = $producteurArchive;

        return $this;
    }

    /**
     * Get producteurArchive
     *
     * @return string 
     */
    public function getProducteurArchive()
    {
        return $this->producteurArchive;
    }

    /**
     * Set detenteurArchive
     *
     * @param string $detenteurArchive
     * @return archive
     */
    public function setDetenteurArchive($detenteurArchive)
    {
        $this->detenteurArchive = $detenteurArchive;

        return $this;
    }

    /**
     * Get detenteurArchive
     *
     * @return string 
     */
    public function getDetenteurArchive()
    {
        return $this->detenteurArchive;
    }

    /**
     * Set communicabilite
     *
     * @param string $communicabilite
     * @return archive
     */
    public function setCommunicabilite($communicabilite)
    {
        $this->communicabilite = $communicabilite;

        return $this;
    }

    /**
     * Get communicabilite
     *
     * @return string 
     */
    public function getCommunicabilite()
    {
        return $this->communicabilite;
    }

    /**
     * Set conditionPourYAcceder
     *
     * @param string $conditionPourYAcceder
     * @return archive
     */
    public function setConditionPourYAcceder($conditionPourYAcceder)
    {
        $this->conditionPourYAcceder = $conditionPourYAcceder;

        return $this;
    }

    /**
     * Get conditionPourYAcceder
     *
     * @return string 
     */
    public function getConditionPourYAcceder()
    {
        return $this->conditionPourYAcceder;
    }
}
