<?php

namespace AsesoresSA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity
 */
class Cliente
{
    /**
     * @var string
     *
     * @ORM\Column(name="fileCliente", type="string", length=5)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $filecliente;

    /**
     * @var string
     *
     * @ORM\Column(name="idCLiente", type="string", length=13, nullable=true)
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombresCliente", type="string", length=50, nullable=true)
     */
    private $nombrescliente;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidosCliente", type="string", length=50, nullable=true)
     */
    private $apellidoscliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreLegalCliente", type="string", length=100, nullable=true)
     */
    private $nombrelegalcliente;



    /**
     * Set filecliente
     *
     * @param string $filecliente
     * @return Cliente
     */
    public function setFilecliente($filecliente)
    {
        $this->filecliente = $filecliente;

        return $this;
    }
    
    /**
     * Get filecliente
     *
     * @return string 
     */
    public function getFilecliente()
    {
        return $this->filecliente;
    }

    /**
     * Set idcliente
     *
     * @param string $idcliente
     * @return Cliente
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return string 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set nombrescliente
     *
     * @param string $nombrescliente
     * @return Cliente
     */
    public function setNombrescliente($nombrescliente)
    {
        $this->nombrescliente = $nombrescliente;

        return $this;
    }

    /**
     * Get nombrescliente
     *
     * @return string 
     */
    public function getNombrescliente()
    {
        return $this->nombrescliente;
    }

    /**
     * Set apellidoscliente
     *
     * @param string $apellidoscliente
     * @return Cliente
     */
    public function setApellidoscliente($apellidoscliente)
    {
        $this->apellidoscliente = $apellidoscliente;

        return $this;
    }

    /**
     * Get apellidoscliente
     *
     * @return string 
     */
    public function getApellidoscliente()
    {
        return $this->apellidoscliente;
    }

    /**
     * Set nombrelegalcliente
     *
     * @param string $nombrelegalcliente
     * @return Cliente
     */
    public function setNombrelegalcliente($nombrelegalcliente)
    {
        $this->nombrelegalcliente = $nombrelegalcliente;

        return $this;
    }

    /**
     * Get nombrelegalcliente
     *
     * @return string 
     */
    public function getNombrelegalcliente()
    {
        return $this->nombrelegalcliente;
    }
}
