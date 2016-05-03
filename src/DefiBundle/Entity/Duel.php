<?php

namespace DefiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Duel
 */
class Duel
{
    /**
     * @var int
     */
    private $idDuel;

    /**
     * @var int
     */
    private $fidUser1;

    /**
     * @var int
     */
    private $fidUser2;


    /**
     * Get id
     *
     * @return int
     */
    public function getIdDuel()
    {
        return $this->idDuel;
    }

    /**
     * Set fidUser1
     *
     * @param integer $fidUser1
     *
     * @return Duel
     */
    public function setFidUser1($fidUser1)
    {
        $this->fidUser1 = $fidUser1;

        return $this;
    }

    /**
     * Get fidUser1
     *
     * @return int
     */
    public function getFidUser1()
    {
        return $this->fidUser1;
    }

    /**
     * Set fidUser2
     *
     * @param integer $fidUser2
     *
     * @return Duel
     */
    public function setFidUser2($fidUser2)
    {
        $this->fidUser2 = $fidUser2;

        return $this;
    }

    /**
     * Get fidUser2
     *
     * @return int
     */
    public function getFidUser2()
    {
        return $this->fidUser2;
    }
}

