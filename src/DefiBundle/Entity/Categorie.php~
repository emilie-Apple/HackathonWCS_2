<?php

namespace DefiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Categorie
 */
class Categorie
{
    /**
     * @var int
     */
    private $idCategorie;

    /**
     * @var string
     */
    private $nomCategorie;

    private $fidCategorie;


    /**
     * Get id
     *
     * @return int
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set nomCategorie
     *
     * @param string $nomCategorie
     *
     * @return Categorie
     */
    public function setNomCategorie($nomCategorie)
    {
        $this->nomCategorie = $nomCategorie;

        return $this;
    }

    /**
     * Get nomCategorie
     *
     * @return string
     */
    public function getNomCategorie()
    {
        return $this->nomCategorie;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fidCategorie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fidCategorie
     *
     * @param \DefiBundle\Entity\Sport $fidCategorie
     *
     * @return Categorie
     */
    public function addFidCategorie(\DefiBundle\Entity\Sport $fidCategorie)
    {
        $this->fidCategorie[] = $fidCategorie;

        return $this;
    }

    /**
     * Remove fidCategorie
     *
     * @param \DefiBundle\Entity\Sport $fidCategorie
     */
    public function removeFidCategorie(\DefiBundle\Entity\Sport $fidCategorie)
    {
        $this->fidCategorie->removeElement($fidCategorie);
    }

    /**
     * Get fidCategorie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFidCategorie()
    {
        return $this->fidCategorie;
    }
}
