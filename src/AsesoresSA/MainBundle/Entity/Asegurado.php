<?php

namespace AsesoresSA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asegurado
 *
 * @ORM\Table(name="asegurado", indexes={@ORM\Index(name="numeroAnexo", columns={"numeroAnexo"})})
 * @ORM\Entity
 */
class Asegurado
{
    /**
     * @var string
     *
     * @ORM\Column(name="icASegurado", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $icasegurado;

    /**
     * @var string
     *
     * @ORM\Column(name="nombresAsegurado", type="string", length=20, nullable=true)
     */
    private $nombresasegurado;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidosASegurado", type="string", length=20, nullable=true)
     */
    private $apellidosasegurado;

    /**
     * @var string
     *
     * @ORM\Column(name="valorAsegurado", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $valorasegurado;

    /**
     * @var \AsesoresSA\MainBundle\Entity\Anexo
     *
     * @ORM\ManyToOne(targetEntity="AsesoresSA\MainBundle\Entity\Anexo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numeroAnexo", referencedColumnName="numeroAnexo")
     * })
     */
    private $numeroanexo;



    /**
     * Set icasegurado
     *
     * @param string $icasegurado
     * @return Asegurado
     */
    public function setIcasegurado($icasegurado)
    {
        $this->icasegurado = $icasegurado;

        return $this;
    }
    
    /**
     * Get icasegurado
     *
     * @return string 
     */
    public function getIcasegurado()
    {
        return $this->icasegurado;
    }

    /**
     * Set nombresasegurado
     *
     * @param string $nombresasegurado
     * @return Asegurado
     */
    public function setNombresasegurado($nombresasegurado)
    {
        $this->nombresasegurado = $nombresasegurado;

        return $this;
    }

    /**
     * Get nombresasegurado
     *
     * @return string 
     */
    public function getNombresasegurado()
    {
        return $this->nombresasegurado;
    }

    /**
     * Set apellidosasegurado
     *
     * @param string $apellidosasegurado
     * @return Asegurado
     */
    public function setApellidosasegurado($apellidosasegurado)
    {
        $this->apellidosasegurado = $apellidosasegurado;

        return $this;
    }

    /**
     * Get apellidosasegurado
     *
     * @return string 
     */
    public function getApellidosasegurado()
    {
        return $this->apellidosasegurado;
    }

    /**
     * Set valorasegurado
     *
     * @param string $valorasegurado
     * @return Asegurado
     */
    public function setValorasegurado($valorasegurado)
    {
        $this->valorasegurado = $valorasegurado;

        return $this;
    }

    /**
     * Get valorasegurado
     *
     * @return string 
     */
    public function getValorasegurado()
    {
        return $this->valorasegurado;
    }

    /**
     * Set numeroanexo
     *
     * @param \AsesoresSA\MainBundle\Entity\Anexo $numeroanexo
     * @return Asegurado
     */
    public function setNumeroanexo(\AsesoresSA\MainBundle\Entity\Anexo $numeroanexo = null)
    {
        $this->numeroanexo = $numeroanexo;

        return $this;
    }

    /**
     * Get numeroanexo
     *
     * @return \AsesoresSA\MainBundle\Entity\Anexo 
     */
    public function getNumeroanexo()
    {
        return $this->numeroanexo;
    }
}
