<?php

namespace AsesoresSA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perfil
 *
 * @ORM\Table(name="perfil")
 * @ORM\Entity
 */
class Perfil
{
    /**
     * @var string
     *
     * @ORM\Column(name="rolPerfil", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rolperfil;


    /**
     * Set rolperfil
     *
     * @param string $rolperfil
     * @return Perfil
     */
    public function setRolperfil($rolperfil)
    {
        $this->rolperfil = $rolperfil;

        return $this;
    }
    
    /**
     * Get rolperfil
     *
     * @return string 
     */
    public function getRolperfil()
    {
        return $this->rolperfil;
    }
}
