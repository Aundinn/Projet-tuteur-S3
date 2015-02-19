<?php

namespace PR2L\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profil <br/>
 * Dans ce fichier, on mettra egalement tout ce qui est "metier", c'est-a-dire des calculs, etc
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PR2L\UserBundle\Entity\ProfilRepository")
 */
class Profil {
	/**
	 *
	 * @var integer @ORM\Column(name="id", type="integer")
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="userLogin", type="string", length=255)
	 */
	private $userLogin;
	
	/**
	 *
	 * @var string @ORM\Column(name="userPwd", type="string", length=255)
	 */
	private $userPwd;
	
	/**
	 *
	 * @var string @ORM\Column(name="userNom", type="string", length=255)
	 */
	private $userNom;
	
	/**
	 *
	 * @var string @ORM\Column(name="userPrenom", type="string", length=255)
	 */
	private $userPrenom;
	
	/**
	 *
	 * @var string @ORM\Column(name="userTelephone", type="string", length=10)
	 */
	private $userTelephone;
	
	/**
	 *
	 * @var string @ORM\Column(name="userEmail", type="string", length=255)
	 */
	private $userEmail;
	
	/**
	 *
	 * @var boolean @ORM\Column(name="userIsAdherent", type="boolean")
	 */
	private $userIsAdherent;
	
	/**
	 *
	 * @var boolean @ORM\Column(name="userIsContributeur", type="boolean")
	 */
	private $userIsContributeur;
	
	/**
	 *
	 * @var boolean @ORM\Column(name="userIsModerateur", type="boolean")
	 */
	private $userIsModerateur;
	
	/**
	 *
	 * @var boolean @ORM\Column(name="userIsAdmin", type="boolean")
	 */
	private $userIsAdmin;
	
	/**
	 *
	 * @var string @ORM\Column(name="userFonction", type="string", length=255)
	 */
	private $userFonction;
	
	/**
	 *
	 * @var \DateTime @ORM\Column(name="userDateDerniereConnexion", type="datetime")
	 */
	private $userDateDerniereConnexion;
	
	/**
	 *
	 * @var boolean @ORM\Column(name="userCanWrite", type="boolean")
	 */
	private $userCanWrite;
	
	/**
	 *
	 * @var boolean @ORM\Column(name="userCanRead", type="boolean")
	 */
	private $userCanRead;
	
	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	/**
	 * Set userId
	 *
	 * @param string $userId       	
	 * @return Profil
	 */
	public function setUserId($userId) {
		$this->userId = $userId;
		
		return $this;
	}
	/**
	 * Set userLogin
	 *
	 * @param string $userLogin        	
	 * @return Profil
	 */
	public function setUserLogin($userLogin) {
		$this->userLogin = $userLogin;
		
		return $this;
	}
	
	/**
	 * Get userLogin
	 *
	 * @return string
	 */
	public function getUserLogin() {
		return $this->userLogin;
	}
	
	/**
	 * Set userPwd
	 *
	 * @param string $userPwd        	
	 * @return Profil
	 */
	public function setUserPwd($userPwd) {
		$this->userPwd = $userPwd;
		
		return $this;
	}
	
	/**
	 * Get userPwd
	 *
	 * @return string
	 */
	public function getUserPwd() {
		return $this->userPwd;
	}
	
	/**
	 * Set userNom
	 *
	 * @param string $userNom        	
	 * @return Profil
	 */
	public function setUserNom($userNom) {
		$this->userNom = $userNom;
		
		return $this;
	}
	
	/**
	 * Get userNom
	 *
	 * @return string
	 */
	public function getUserNom() {
		return $this->userNom;
	}
	
	/**
	 * Set userPrenom
	 *
	 * @param string $userPrenom        	
	 * @return Profil
	 */
	public function setUserPrenom($userPrenom) {
		$this->userPrenom = $userPrenom;
		
		return $this;
	}
	
	/**
	 * Get userPrenom
	 *
	 * @return string
	 */
	public function getUserPrenom() {
		return $this->userPrenom;
	}
	
	/**
	 * Set userTelephone
	 *
	 * @param string $userTelephone        	
	 * @return Profil
	 */
	public function setUserTelephone($userTelephone) {
		$this->userTelephone = $userTelephone;
		
		return $this;
	}
	
	/**
	 * Get userTelephone
	 *
	 * @return string
	 */
	public function getUserTelephone() {
		return $this->userTelephone;
	}
	
	/**
	 * Set userEmail
	 *
	 * @param string $userEmail        	
	 * @return Profil
	 */
	public function setUserEmail($userEmail) {
		$this->userEmail = $userEmail;
		
		return $this;
	}
	
	/**
	 * Get userEmail
	 *
	 * @return string
	 */
	public function getUserEmail() {
		return $this->userEmail;
	}
	
	/**
	 * Set userIsAdherent
	 *
	 * @param boolean $userIsAdherent        	
	 * @return Profil
	 */
	public function setUserIsAdherent($userIsAdherent) {
		$this->userIsAdherent = $userIsAdherent;
		
		return $this;
	}
	
	/**
	 * Get userIsAdherent
	 *
	 * @return boolean
	 */
	public function getUserIsAdherent() {
		return $this->userIsAdherent;
	}
	
	/**
	 * Set userIsContributeur
	 *
	 * @param boolean $userIsContributeur        	
	 * @return Profil
	 */
	public function setUserIsContributeur($userIsContributeur) {
		$this->userIsContributeur = $userIsContributeur;
		
		return $this;
	}
	
	/**
	 * Get userIsContributeur
	 *
	 * @return boolean
	 */
	public function getUserIsContributeur() {
		return $this->userIsContributeur;
	}
	
	/**
	 * Set userIsModerateur
	 *
	 * @param boolean $userIsModerateur        	
	 * @return Profil
	 */
	public function setUserIsModerateur($userIsModerateur) {
		$this->userIsModerateur = $userIsModerateur;
		
		return $this;
	}
	
	/**
	 * Get userIsModerateur
	 *
	 * @return boolean
	 */
	public function getUserIsModerateur() {
		return $this->userIsModerateur;
	}
	
	/**
	 * Set userIsAdmin
	 *
	 * @param boolean $userIsAdmin        	
	 * @return Profil
	 */
	public function setUserIsAdmin($userIsAdmin) {
		$this->userIsAdmin = $userIsAdmin;
		
		return $this;
	}
	
	/**
	 * Get userIsAdmin
	 *
	 * @return boolean
	 */
	public function getUserIsAdmin() {
		return $this->userIsAdmin;
	}
	
	/**
	 * Set userFonction
	 *
	 * @param string $userFonction        	
	 * @return Profil
	 */
	public function setUserFonction($userFonction) {
		$this->userFonction = $userFonction;
		
		return $this;
	}
	
	/**
	 * Get userFonction
	 *
	 * @return string
	 */
	public function getUserFonction() {
		return $this->userFonction;
	}
	
	/**
	 * Set userDateDerniereConnexion
	 *
	 * @param \DateTime $userDateDerniereConnexion        	
	 * @return Profil
	 */
	public function setUserDateDerniereConnexion($userDateDerniereConnexion) {
		$this->userDateDerniereConnexion = $userDateDerniereConnexion;
		
		return $this;
	}
	
	/**
	 * Get userDateDerniereConnexion
	 *
	 * @return \DateTime
	 */
	public function getUserDateDerniereConnexion() {
		return $this->userDateDerniereConnexion;
	}
	
	/**
	 * Set userCanWrite
	 *
	 * @param boolean $userCanWrite        	
	 * @return Profil
	 */
	public function setUserCanWrite($userCanWrite) {
		$this->userCanWrite = $userCanWrite;
		
		return $this;
	}
	
	/**
	 * Get userCanWrite
	 *
	 * @return boolean
	 */
	public function getUserCanWrite() {
		return $this->userCanWrite;
	}
	
	/**
	 * Set userCanRead
	 *
	 * @param boolean $userCanRead        	
	 * @return Profil
	 */
	public function setUserCanRead($userCanRead) {
		$this->userCanRead = $userCanRead;
		
		return $this;
	}
	
	/**
	 * Get userCanRead
	 *
	 * @return boolean
	 */
	public function getUserCanRead() {
		return $this->userCanRead;
	}
}
