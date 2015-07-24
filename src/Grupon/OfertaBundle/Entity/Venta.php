<?php

namespace Grupon\OfertaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Venta
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Venta
{
    /**
     * @ORM\Column(name="datetime")
     */
    protected $fecha;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Grupon\OfertaBundle\Entity\Oferta")
     */
    private $oferta;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Grupon\UsuarioBundle\Entity\Usuario")
     */
    protected $usuario;

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setOferta(\Grupon\OfertaBundle\Entity\Oferta $oferta)
    {
        $this->oferta = $oferta;
    }

    public function getOferta()
    {
        return $this->oferta;
    }

    public function setUsuario(\Grupon\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

}