<?php

namespace AsesoresSA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objeto
 *
 * @ORM\Table(name="objeto", indexes={@ORM\Index(name="numeroAnexo", columns={"numeroAnexo"})})
 * @ORM\Entity
 */
class Objeto
{
    /**
     * @var string
     *
     * @ORM\Column(name="idObjeto", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idobjeto;

    /**
     * @var string
     *
     * @ORM\Column(name="valorObjeto", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $valorobjeto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcionObjeto", type="string", length=50, nullable=true)
     */
    private $descripcionobjeto;

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
     * Get idobjeto
     *
     * @return string 
     */
    public function getIdobjeto()
    {
        return $this->idobjeto;
    }

    /**
     * Set valorobjeto
     *
     * @param string $valorobjeto
     * @return Objeto
     */
    public function setValorobjeto($valorobjeto)
    {
        $this->valorobjeto = $valorobjeto;

        return $this;
    }

    /**
     * Get valorobjeto
     *
     * @return string 
     */
    public function getValorobjeto()
    {
        return $this->valorobjeto;
    }

    /**
     * Set descripcionobjeto
     *
     * @param string $descripcionobjeto
     * @return Objeto
     */
    public function setDescripcionobjeto($descripcionobjeto)
    {
        $this->descripcionobjeto = $descripcionobjeto;

        return $this;
    }

    /**
     * Get descripcionobjeto
     *
     * @return string 
     */
    public function getDescripcionobjeto()
    {
        return $this->descripcionobjeto;
    }

    /**
     * Set numeroanexo
     *
     * @param \AsesoresSA\MainBundle\Entity\Anexo $numeroanexo
     * @return Objeto
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
