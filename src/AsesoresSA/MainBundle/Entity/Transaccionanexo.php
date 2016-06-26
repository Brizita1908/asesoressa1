<?php

namespace AsesoresSA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionanexo
 *
 * @ORM\Table(name="transaccionanexo", indexes={@ORM\Index(name="numeroAnexo", columns={"numeroAnexo"})})
 * @ORM\Entity
 */
class Transaccionanexo
{
    /**
     * @var \AsesoresSA\MainBundle\Entity\Transaccion
     *
     * @ORM\OneToOne(targetEntity="AsesoresSA\MainBundle\Entity\Transaccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTransaccion", referencedColumnName="idTransaccion", unique=true)
     * })
     */
    private $idtransaccion;

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
     * Set idtransaccion
     *
     * @param \AsesoresSA\MainBundle\Entity\Transaccion $idtransaccion
     * @return Transaccionanexo
     */
    public function setIdtransaccion(\AsesoresSA\MainBundle\Entity\Transaccion $idtransaccion = null)
    {
        $this->idtransaccion = $idtransaccion;

        return $this;
    }

    /**
     * Get idtransaccion
     *
     * @return \AsesoresSA\MainBundle\Entity\Transaccion 
     */
    public function getIdtransaccion()
    {
        return $this->idtransaccion;
    }

    /**
     * Set numeroanexo
     *
     * @param \AsesoresSA\MainBundle\Entity\Anexo $numeroanexo
     * @return Transaccionanexo
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
