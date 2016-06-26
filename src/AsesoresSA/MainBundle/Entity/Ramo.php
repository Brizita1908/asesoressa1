<?php

namespace AsesoresSA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ramo
 *
 * @ORM\Table(name="ramo")
 * @ORM\Entity
 */
class Ramo
{
    /**
     * @var string
     *
     * @ORM\Column(name="siglaRamo", type="string", length=5)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $siglaramo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreRamo", type="string", length=50, nullable=true)
     */
    private $nombreramo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoRamo", type="string", length=1, nullable=true)
     */
    private $tiporamo;

    /**
     * Set siglaramo
     *
     * @param string $siglaramo
     * @return Ramo
     */
    public function setSiglaramo($siglaramo)
    {
        $this->siglaramo = $siglaramo;

        return $this;
    }

    /**
     * Get siglaramo
     *
     * @return string 
     */
    public function getSiglaramo()
    {
        return $this->siglaramo;
    }

    /**
     * Set nombreramo
     *
     * @param string $nombreramo
     * @return Ramo
     */
    public function setNombreramo($nombreramo)
    {
        $this->nombreramo = $nombreramo;

        return $this;
    }

    /**
     * Get nombreramo
     *
     * @return string 
     */
    public function getNombreramo()
    {
        return $this->nombreramo;
    }

    /**
     * Set tiporamo
     *
     * @param string $tiporamo
     * @return Ramo
     */
    public function setTiporamo($tiporamo)
    {
        $this->tiporamo = $tiporamo;

        return $this;
    }

    /**
     * Get tiporamo
     *
     * @return string 
     */
    public function getTiporamo()
    {
        return $this->tiporamo;
    }
}
