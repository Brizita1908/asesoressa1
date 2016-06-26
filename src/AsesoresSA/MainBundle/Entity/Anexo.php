<?php

namespace AsesoresSA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anexo
 *
 * @ORM\Table(name="anexo", indexes={@ORM\Index(name="numeroPoliza", columns={"numeroPoliza"}), @ORM\Index(name="siglaRamo", columns={"siglaRamo"}), @ORM\Index(name="idPago", columns={"idPago"})})
 * @ORM\Entity
 */
class Anexo
{
    /**
     * @var string
     *
     * @ORM\Column(name="numeroAnexo", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numeroanexo;

    /**
     * @var string
     *
     * @ORM\Column(name="inicioVigenciaAnexo", type="string", length=10, nullable=true)
     */
    private $iniciovigenciaanexo;

    /**
     * @var string
     *
     * @ORM\Column(name="finVigenciaAnexo", type="string", length=10, nullable=true)
     */
    private $finvigenciaanexo;

    /**
     * @var string
     *
     * @ORM\Column(name="valorTotalAseguradoAnexo", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $valortotalaseguradoanexo;

    /**
     * @var \AsesoresSA\MainBundle\Entity\Poliza
     *
     * @ORM\ManyToOne(targetEntity="AsesoresSA\MainBundle\Entity\Poliza")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numeroPoliza", referencedColumnName="numeroPoliza")
     * })
     */
    private $numeropoliza;

    /**
     * @var \AsesoresSA\MainBundle\Entity\Ramo
     *
     * @ORM\ManyToOne(targetEntity="AsesoresSA\MainBundle\Entity\Ramo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="siglaRamo", referencedColumnName="siglaRamo")
     * })
     */
    private $siglaramo;

    /**
     * @var \AsesoresSA\MainBundle\Entity\Pago
     *
     * @ORM\ManyToOne(targetEntity="AsesoresSA\MainBundle\Entity\Pago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPago", referencedColumnName="idPago")
     * })
     */
    private $idpago;



    /**
     * Set numeroanexo
     *
     * @param string $numeroanexo
     * @return Anexo
     */
    public function setNumeroanexo($numeroanexo)
    {
        $this->numeroanexo = $numeroanexo;

        return $this;
    }
    
    /**
     * Get numeroanexo
     *
     * @return string 
     */
    public function getNumeroanexo()
    {
        return $this->numeroanexo;
    }

    /**
     * Set iniciovigenciaanexo
     *
     * @param string $iniciovigenciaanexo
     * @return Anexo
     */
    public function setIniciovigenciaanexo($iniciovigenciaanexo)
    {
        $this->iniciovigenciaanexo = $iniciovigenciaanexo;

        return $this;
    }

    /**
     * Get iniciovigenciaanexo
     *
     * @return string 
     */
    public function getIniciovigenciaanexo()
    {
        return $this->iniciovigenciaanexo;
    }

    /**
     * Set finvigenciaanexo
     *
     * @param string $finvigenciaanexo
     * @return Anexo
     */
    public function setFinvigenciaanexo($finvigenciaanexo)
    {
        $this->finvigenciaanexo = $finvigenciaanexo;

        return $this;
    }

    /**
     * Get finvigenciaanexo
     *
     * @return string 
     */
    public function getFinvigenciaanexo()
    {
        return $this->finvigenciaanexo;
    }

    /**
     * Set valortotalaseguradoanexo
     *
     * @param string $valortotalaseguradoanexo
     * @return Anexo
     */
    public function setValortotalaseguradoanexo($valortotalaseguradoanexo)
    {
        $this->valortotalaseguradoanexo = $valortotalaseguradoanexo;

        return $this;
    }

    /**
     * Get valortotalaseguradoanexo
     *
     * @return string 
     */
    public function getValortotalaseguradoanexo()
    {
        return $this->valortotalaseguradoanexo;
    }

    /**
     * Set numeropoliza
     *
     * @param \AsesoresSA\MainBundle\Entity\Poliza $numeropoliza
     * @return Anexo
     */
    public function setNumeropoliza(\AsesoresSA\MainBundle\Entity\Poliza $numeropoliza = null)
    {
        $this->numeropoliza = $numeropoliza;

        return $this;
    }

    /**
     * Get numeropoliza
     *
     * @return \AsesoresSA\MainBundle\Entity\Poliza 
     */
    public function getNumeropoliza()
    {
        return $this->numeropoliza;
    }

    /**
     * Set siglaramo
     *
     * @param \AsesoresSA\MainBundle\Entity\Ramo $siglaramo
     * @return Anexo
     */
    public function setSiglaramo(\AsesoresSA\MainBundle\Entity\Ramo $siglaramo = null)
    {
        $this->siglaramo = $siglaramo;

        return $this;
    }

    /**
     * Get siglaramo
     *
     * @return \AsesoresSA\MainBundle\Entity\Ramo 
     */
    public function getSiglaramo()
    {
        return $this->siglaramo;
    }

    /**
     * Set idpago
     *
     * @param \AsesoresSA\MainBundle\Entity\Pago $idpago
     * @return Anexo
     */
    public function setIdpago(\AsesoresSA\MainBundle\Entity\Pago $idpago = null)
    {
        $this->idpago = $idpago;

        return $this;
    }

    /**
     * Get idpago
     *
     * @return \AsesoresSA\MainBundle\Entity\Pago 
     */
    public function getIdpago()
    {
        return $this->idpago;
    }
}
