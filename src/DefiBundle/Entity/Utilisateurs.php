<?php

namespace DefiBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 */
class Utilisateurs extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

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


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
}

