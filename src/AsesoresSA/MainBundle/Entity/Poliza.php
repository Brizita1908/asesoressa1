<?php

namespace AsesoresSA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poliza
 *
 * @ORM\Table(name="poliza", indexes={@ORM\Index(name="fileCliente", columns={"fileCliente"}), @ORM\Index(name="siglaAseguradora", columns={"siglaAseguradora"})})
 * @ORM\Entity
 */
class Poliza
{
    /**
     * @var string
     *
     * @ORM\Column(name="numeroPoliza", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numeropoliza;

    /**
     * @var \AsesoresSA\MainBundle\Entity\Cliente
     *
     * @ORM\ManyToOne(targetEntity="AsesoresSA\MainBundle\Entity\Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fileCliente", referencedColumnName="fileCliente")
     * })
     */
    private $filecliente;

    /**
     * @var \AsesoresSA\MainBundle\Entity\Aseguradora
     *
     * @ORM\ManyToOne(targetEntity="AsesoresSA\MainBundle\Entity\Aseguradora")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="siglaAseguradora", referencedColumnName="siglaAseguradora")
     * })
     */
    private $siglaaseguradora;



    /**
     * Get numeropoliza
     *
     * @return string 
     */
    public function getNumeropoliza()
    {
        return $this->numeropoliza;
    }

    /**
     * Set filecliente
     *
     * @param \AsesoresSA\MainBundle\Entity\Cliente $filecliente
     * @return Poliza
     */
    public function setFilecliente(\AsesoresSA\MainBundle\Entity\Cliente $filecliente = null)
    {
        $this->filecliente = $filecliente;

        return $this;
    }

    /**
     * Get filecliente
     *
     * @return \AsesoresSA\MainBundle\Entity\Cliente 
     */
    public function getFilecliente()
    {
        return $this->filecliente;
    }

    /**
     * Set siglaaseguradora
     *
     * @param \AsesoresSA\MainBundle\Entity\Aseguradora $siglaaseguradora
     * @return Poliza
     */
    public function setSiglaaseguradora(\AsesoresSA\MainBundle\Entity\Aseguradora $siglaaseguradora = null)
    {
        $this->siglaaseguradora = $siglaaseguradora;

        return $this;
    }

    /**
     * Get siglaaseguradora
     *
     * @return \AsesoresSA\MainBundle\Entity\Aseguradora 
     */
    public function getSiglaaseguradora()
    {
        return $this->siglaaseguradora;
    }
}
