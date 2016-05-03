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
}

