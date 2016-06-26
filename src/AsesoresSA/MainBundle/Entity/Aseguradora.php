<?php

namespace AsesoresSA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aseguradora
 *
 * @ORM\Table(name="aseguradora")
 * @ORM\Entity
 */
class Aseguradora
{
    /**
     * @var string
     *
     * @ORM\Column(name="siglaAseguradora", type="string", length=5)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $siglaaseguradora;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreAseguradora", type="string", length=30, nullable=true)
     */
    private $nombreaseguradora;



    /**
     * Set siglaaseguradora
     *
     * @param string $siglaaseguradora
     * @return Aseguradora
     */
    public function setSiglaaseguradora($siglaaseguradora)
    {
        $this->siglaaseguradora = $siglaaseguradora;

        return $this;
    }
    
    /**
     * Get siglaaseguradora
     *
     * @return string 
     */
    public function getSiglaaseguradora()
    {
        return $this->siglaaseguradora;
    }

    /**
     * Set nombreaseguradora
     *
     * @param string $nombreaseguradora
     * @return Aseguradora
     */
    public function setNombreaseguradora($nombreaseguradora)
    {
        $this->nombreaseguradora = $nombreaseguradora;

        return $this;
    }

    /**
     * Get nombreaseguradora
     *
     * @return string 
     */
    public function getNombreaseguradora()
    {
        return $this->nombreaseguradora;
    }
}
