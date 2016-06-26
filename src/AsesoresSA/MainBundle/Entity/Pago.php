<?php

namespace AsesoresSA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pago
 *
 * @ORM\Table(name="pago")
 * @ORM\Entity
 */
class Pago
{
    /**
     * @var string
     *
     * @ORM\Column(name="idPago", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpago;

    /**
     * @var string
     *
     * @ORM\Column(name="tasaPago", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tasapago;

    /**
     * @var string
     *
     * @ORM\Column(name="primaPago", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $primapago;

    /**
     * @var string
     *
     * @ORM\Column(name="porcentajeComisionPago", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $porcentajecomisionpago;

    /**
     * @var string
     *
     * @ORM\Column(name="comisionPago", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $comisionpago;

    /**
     * @var string
     *
     * @ORM\Column(name="metodoPago", type="string", length=10, nullable=true)
     */
    private $metodopago;

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroCuotas", type="integer", nullable=true)
     */
    private $numerocuotas;



    /**
     * Get idpago
     *
     * @return string 
     */
    public function getIdpago()
    {
        return $this->idpago;
    }

    /**
     * Set tasapago
     *
     * @param string $tasapago
     * @return Pago
     */
    public function setTasapago($tasapago)
    {
        $this->tasapago = $tasapago;

        return $this;
    }

    /**
     * Get tasapago
     *
     * @return string 
     */
    public function getTasapago()
    {
        return $this->tasapago;
    }

    /**
     * Set primapago
     *
     * @param string $primapago
     * @return Pago
     */
    public function setPrimapago($primapago)
    {
        $this->primapago = $primapago;

        return $this;
    }

    /**
     * Get primapago
     *
     * @return string 
     */
    public function getPrimapago()
    {
        return $this->primapago;
    }

    /**
     * Set porcentajecomisionpago
     *
     * @param string $porcentajecomisionpago
     * @return Pago
     */
    public function setPorcentajecomisionpago($porcentajecomisionpago)
    {
        $this->porcentajecomisionpago = $porcentajecomisionpago;

        return $this;
    }

    /**
     * Get porcentajecomisionpago
     *
     * @return string 
     */
    public function getPorcentajecomisionpago()
    {
        return $this->porcentajecomisionpago;
    }

    /**
     * Set comisionpago
     *
     * @param string $comisionpago
     * @return Pago
     */
    public function setComisionpago($comisionpago)
    {
        $this->comisionpago = $comisionpago;

        return $this;
    }

    /**
     * Get comisionpago
     *
     * @return string 
     */
    public function getComisionpago()
    {
        return $this->comisionpago;
    }

    /**
     * Set metodopago
     *
     * @param string $metodopago
     * @return Pago
     */
    public function setMetodopago($metodopago)
    {
        $this->metodopago = $metodopago;

        return $this;
    }

    /**
     * Get metodopago
     *
     * @return string 
     */
    public function getMetodopago()
    {
        return $this->metodopago;
    }

    /**
     * Set numerocuotas
     *
     * @param integer $numerocuotas
     * @return Pago
     */
    public function setNumerocuotas($numerocuotas)
    {
        $this->numerocuotas = $numerocuotas;

        return $this;
    }

    /**
     * Get numerocuotas
     *
     * @return integer 
     */
    public function getNumerocuotas()
    {
        return $this->numerocuotas;
    }
}
