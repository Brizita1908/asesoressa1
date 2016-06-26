<?php

namespace AsesoresSA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccion
 *
 * @ORM\Table(name="transaccion", indexes={@ORM\Index(name="idUsuario", columns={"idUsuario"}), @ORM\Index(name="siglaMovimiento", columns={"siglaMovimiento"})})
 * @ORM\Entity
 */
class Transaccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTransaccion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtransaccion;

    /**
     * @var string
     *
     * @ORM\Column(name="medioSolicitud", type="string", length=10, nullable=true)
     */
    private $mediosolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroCartaSolicitud", type="string", length=10, nullable=true)
     */
    private $numerocartasolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaSolicitud", type="string", length=10, nullable=true)
     */
    private $fechasolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="cartaFirmadaEntrega", type="string", length=10, nullable=true)
     */
    private $cartafirmadaentrega;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaEntrega", type="string", length=10, nullable=true)
     */
    private $fechaentrega;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoTransaccion", type="string", length=10, nullable=true)
     */
    private $estadotransaccion;

    /**
     * @var \AsesoresSA\MainBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="AsesoresSA\MainBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuario", referencedColumnName="idUsuario")
     * })
     */
    private $idusuario;

    /**
     * @var \AsesoresSA\MainBundle\Entity\Movimiento
     *
     * @ORM\ManyToOne(targetEntity="AsesoresSA\MainBundle\Entity\Movimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="siglaMovimiento", referencedColumnName="siglaMovimiento")
     * })
     */
    private $siglamovimiento;



    /**
     * Get idtransaccion
     *
     * @return integer 
     */
    public function getIdtransaccion()
    {
        return $this->idtransaccion;
    }

    /**
     * Set mediosolicitud
     *
     * @param string $mediosolicitud
     * @return Transaccion
     */
    public function setMediosolicitud($mediosolicitud)
    {
        $this->mediosolicitud = $mediosolicitud;

        return $this;
    }

    /**
     * Get mediosolicitud
     *
     * @return string 
     */
    public function getMediosolicitud()
    {
        return $this->mediosolicitud;
    }

    /**
     * Set numerocartasolicitud
     *
     * @param string $numerocartasolicitud
     * @return Transaccion
     */
    public function setNumerocartasolicitud($numerocartasolicitud)
    {
        $this->numerocartasolicitud = $numerocartasolicitud;

        return $this;
    }

    /**
     * Get numerocartasolicitud
     *
     * @return string 
     */
    public function getNumerocartasolicitud()
    {
        return $this->numerocartasolicitud;
    }

    /**
     * Set fechasolicitud
     *
     * @param string $fechasolicitud
     * @return Transaccion
     */
    public function setFechasolicitud($fechasolicitud)
    {
        $this->fechasolicitud = $fechasolicitud;

        return $this;
    }

    /**
     * Get fechasolicitud
     *
     * @return string 
     */
    public function getFechasolicitud()
    {
        return $this->fechasolicitud;
    }

    /**
     * Set cartafirmadaentrega
     *
     * @param string $cartafirmadaentrega
     * @return Transaccion
     */
    public function setCartafirmadaentrega($cartafirmadaentrega)
    {
        $this->cartafirmadaentrega = $cartafirmadaentrega;

        return $this;
    }

    /**
     * Get cartafirmadaentrega
     *
     * @return string 
     */
    public function getCartafirmadaentrega()
    {
        return $this->cartafirmadaentrega;
    }

    /**
     * Set fechaentrega
     *
     * @param string $fechaentrega
     * @return Transaccion
     */
    public function setFechaentrega($fechaentrega)
    {
        $this->fechaentrega = $fechaentrega;

        return $this;
    }

    /**
     * Get fechaentrega
     *
     * @return string 
     */
    public function getFechaentrega()
    {
        return $this->fechaentrega;
    }

    /**
     * Set estadotransaccion
     *
     * @param string $estadotransaccion
     * @return Transaccion
     */
    public function setEstadotransaccion($estadotransaccion)
    {
        $this->estadotransaccion = $estadotransaccion;

        return $this;
    }

    /**
     * Get estadotransaccion
     *
     * @return string 
     */
    public function getEstadotransaccion()
    {
        return $this->estadotransaccion;
    }

    /**
     * Set idusuario
     *
     * @param \AsesoresSA\MainBundle\Entity\Usuarios $idusuario
     * @return Transaccion
     */
    public function setIdusuario(\AsesoresSA\MainBundle\Entity\Usuarios $idusuario = null)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \AsesoresSA\MainBundle\Entity\Usuarios 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set siglamovimiento
     *
     * @param \AsesoresSA\MainBundle\Entity\Movimiento $siglamovimiento
     * @return Transaccion
     */
    public function setSiglamovimiento(\AsesoresSA\MainBundle\Entity\Movimiento $siglamovimiento = null)
    {
        $this->siglamovimiento = $siglamovimiento;

        return $this;
    }

    /**
     * Get siglamovimiento
     *
     * @return \AsesoresSA\MainBundle\Entity\Movimiento 
     */
    public function getSiglamovimiento()
    {
        return $this->siglamovimiento;
    }
}
