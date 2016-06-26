<?php

namespace AsesoresSA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movimiento
 *
 * @ORM\Table(name="movimiento")
 * @ORM\Entity
 */
class Movimiento
{
    /**
     * @var string
     *
     * @ORM\Column(name="siglaMovimiento", type="string", length=5)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $siglamovimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoMovimiento", type="string", length=50, nullable=true)
     */
    private $estadomovimiento;



    /**
     * Get siglamovimiento
     *
     * @return string 
     */
    public function getSiglamovimiento()
    {
        return $this->siglamovimiento;
    }
    
    /**
     * Set siglamovimiento
     *
     * @param string $siglamovimiento
     *
     * @return Movimiento
     */
    public function setSiglamovimiento($siglamovimiento)
    {
        $this->siglamovimiento = $siglamovimiento;

        return $this;
    }

    /**
     * Set estadomovimiento
     *
     * @param string $estadomovimiento
     * @return Movimiento
     */
    public function setEstadomovimiento($estadomovimiento)
    {
        $this->estadomovimiento = $estadomovimiento;

        return $this;
    }

    /**
     * Get estadomovimiento
     *
     * @return string 
     */
    public function getEstadomovimiento()
    {
        return $this->estadomovimiento;
    }
}
