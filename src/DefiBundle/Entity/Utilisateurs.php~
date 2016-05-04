<?php

namespace DefiBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 */
class Utilisateurs extends BaseUser
{
    public function __toString()
    {
        return $this->dateNaissance;
    }

    /**
     * @var int
     */
    protected $idUtilisateurs;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var string
     */
    private $sexe;

    /**
     * @var \DateTime
     */
    private $dateNaissance;

    /**
     * @var string
     */
    private $photoProfil;

    private $fidtrophees;

    private $fidUtilisateurs;
    
    private $fidSport;

    /**
     * Get id
     *
     * @return int
     */
    public function getIdUtilisateurs()
    {
        return $this->idUtilisateurs;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Utilisateurs
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Utilisateurs
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Utilisateurs
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set photoProfil
     *
     * @param string $photoProfil
     *
     * @return Utilisateurs
     */
    public function setPhotoProfil($photoProfil)
    {
        $this->photoProfil = $photoProfil;

        return $this;
    }

    /**
     * Get photoProfil
     *
     * @return string
     */
    public function getPhotoProfil()
    {
        return $this->photoProfil;
    }

    /**
     * Add fidtrophee
     *
     * @param \DefiBundle\Entity\Trophees $fidtrophee
     *
     * @return Utilisateurs
     */
    public function addFidtrophee(\DefiBundle\Entity\Trophees $fidtrophee)
    {
        $this->fidtrophees[] = $fidtrophee;

        return $this;
    }

    /**
     * Remove fidtrophee
     *
     * @param \DefiBundle\Entity\Trophees $fidtrophee
     */
    public function removeFidtrophee(\DefiBundle\Entity\Trophees $fidtrophee)
    {
        $this->fidtrophees->removeElement($fidtrophee);
    }

    /**
     * Get fidtrophees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFidtrophees()
    {
        return $this->fidtrophees;
    }

    /**
     * Add fidUtilisateur
     *
     * @param \DefiBundle\Entity\Sport $fidUtilisateur
     *
     * @return Utilisateurs
     */
    public function addFidUtilisateur(\DefiBundle\Entity\Sport $fidUtilisateur)
    {
        $this->fidUtilisateurs[] = $fidUtilisateur;

        return $this;
    }

    /**
     * Remove fidUtilisateur
     *
     * @param \DefiBundle\Entity\Sport $fidUtilisateur
     */
    public function removeFidUtilisateur(\DefiBundle\Entity\Sport $fidUtilisateur)
    {
        $this->fidUtilisateurs->removeElement($fidUtilisateur);
    }

    /**
     * Get fidUtilisateurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFidUtilisateurs()
    {
        return $this->fidUtilisateurs;
    }

    /**
     * Add fidSport
     *
     * @param \DefiBundle\Entity\Sport $fidSport
     *
     * @return Utilisateurs
     */
    public function addFidSport($fidSport)
    {
        $this->fidSport[] = $fidSport;

        return $this;
    }

    /**
     * Remove fidSport
     *
     * @param \DefiBundle\Entity\Sport $fidSport
     */
    public function removeFidSport(\DefiBundle\Entity\Sport $fidSport)
    {
        $this->fidSport->removeElement($fidSport);
    }

    /**
     * Get fidSport
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFidSport()
    {
        return $this->fidSport;
    }
}
