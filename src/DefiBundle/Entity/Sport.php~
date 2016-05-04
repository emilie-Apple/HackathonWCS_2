<?php

namespace DefiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sport
 */
class Sport
{
    /**
     * @var int
     */
    private $idSport;

    /**
     * @var string
     */
    private $nomSport;

    /**
     * @var string
     */
    private $imageSport;


    private $fidcategorie;

    private $fidUtilisateurs;

    /**
     * Get id
     *
     * @return int
     */
    public function getIdSport()
    {
        return $this->idSport;
    }

    /**
     * Set nomSport
     *
     * @param string $nomSport
     *
     * @return Sport
     */
    public function setNomSport($nomSport)
    {
        $this->nomSport = $nomSport;

        return $this;
    }

    /**
     * Get nomSport
     *
     * @return string
     */
    public function getNomSport()
    {
        return $this->nomSport;
    }

    /**
     * Set imageSport
     *
     * @param string $imageSport
     *
     * @return Sport
     */
    public function setImageSport($imageSport)
    {
        $this->imageSport = $imageSport;

        return $this;
    }

    /**
     * Get imageSport
     *
     * @return string
     */
    public function getImageSport()
    {
        return $this->imageSport;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fidcategorie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fidUtilisateurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fidcategorie
     *
     * @param \DefiBundle\Entity\Categorie $fidcategorie
     *
     * @return Sport
     */
    public function addFidcategorie(\DefiBundle\Entity\Categorie $fidcategorie)
    {
        $this->fidcategorie[] = $fidcategorie;

        return $this;
    }

    /**
     * Remove fidcategorie
     *
     * @param \DefiBundle\Entity\Categorie $fidcategorie
     */
    public function removeFidcategorie(\DefiBundle\Entity\Categorie $fidcategorie)
    {
        $this->fidcategorie->removeElement($fidcategorie);
    }

    /**
     * Get fidcategorie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFidcategorie()
    {
        return $this->fidcategorie;
    }

    /**
     * Add fidUtilisateur
     *
     * @param \DefiBundle\Entity\Utilisateurs $fidUtilisateur
     *
     * @return Sport
     */
    public function addFidUtilisateur(\DefiBundle\Entity\Utilisateurs $fidUtilisateur)
    {
        $this->fidUtilisateurs[] = $fidUtilisateur;

        return $this;
    }

    /**
     * Remove fidUtilisateur
     *
     * @param \DefiBundle\Entity\Utilisateurs $fidUtilisateur
     */
    public function removeFidUtilisateur(\DefiBundle\Entity\Utilisateurs $fidUtilisateur)
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
}
