<?php

namespace DefiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trophees
 */

class Trophees
{
    /**
     * @var int
     */
    private $idTrophees;

    /**
     * @var string
     */
    private $nomTrophees;

    private $fidTrophees;


    /**
     * Get id
     *
     * @return int
     */
    public function getIdTrophees()
    {
        return $this->idTrophees;
    }

    /**
     * Set nomTrophees
     *
     * @param string $nomTrophees
     *
     * @return Trophees
     */
    public function setNomTrophees($nomTrophees)
    {
        $this->nomTrophees = $nomTrophees;

        return $this;
    }

    /**
     * Get nomTrophees
     *
     * @return string
     */
    public function getNomTrophees()
    {
        return $this->nomTrophees;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fidTrophees = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fidTrophee
     *
     * @param \DefiBundle\Entity\Utilisateurs $fidTrophee
     *
     * @return Trophees
     */
    public function addFidTrophee(\DefiBundle\Entity\Utilisateurs $fidTrophee)
    {
        $this->fidTrophees[] = $fidTrophee;

        return $this;
    }

    /**
     * Remove fidTrophee
     *
     * @param \DefiBundle\Entity\Utilisateurs $fidTrophee
     */
    public function removeFidTrophee(\DefiBundle\Entity\Utilisateurs $fidTrophee)
    {
        $this->fidTrophees->removeElement($fidTrophee);
    }

    /**
     * Get fidTrophees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFidTrophees()
    {
        return $this->fidTrophees;
    }
}
