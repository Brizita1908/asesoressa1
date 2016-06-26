<?php

namespace AsesoresSA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", indexes={@ORM\Index(name="rolPerfil", columns={"rolPerfil"})})
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var string
     *
     * @ORM\Column(name="idUsuario", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasenaUsuario", type="string", length=10, nullable=true)
     */
    private $contrasenausuario;

    /**
     * @var \AsesoresSA\MainBundle\Entity\Perfil
     *
     * @ORM\ManyToOne(targetEntity="AsesoresSA\MainBundle\Entity\Perfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rolPerfil", referencedColumnName="rolPerfil")
     * })
     */
    private $rolperfil;



    /**
     * Set idusuario
     *
     * @param string $idusuario
     * @return Usuarios
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }
    
    /**
     * Get idusuario
     *
     * @return string 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set contrasenausuario
     *
     * @param string $contrasenausuario
     * @return Usuarios
     */
    public function setContrasenausuario($contrasenausuario)
    {
        $this->contrasenausuario = $contrasenausuario;

        return $this;
    }

    /**
     * Get contrasenausuario
     *
     * @return string 
     */
    public function getContrasenausuario()
    {
        return $this->contrasenausuario;
    }

    /**
     * Set rolperfil
     *
     * @param \AsesoresSA\MainBundle\Entity\Perfil $rolperfil
     * @return Usuarios
     */
    public function setRolperfil(\AsesoresSA\MainBundle\Entity\Perfil $rolperfil = null)
    {
        $this->rolperfil = $rolperfil;

        return $this;
    }

    /**
     * Get rolperfil
     *
     * @return \AsesoresSA\MainBundle\Entity\Perfil 
     */
    public function getRolperfil()
    {
        return $this->rolperfil;
    }
}
