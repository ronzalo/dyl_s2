<?php

namespace Lyd\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lyd\AdminBundle\Entity\EncargadoLegislativo
 */
class EncargadoLegislativo
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $nombre
     */
    private $nombre;

    /**
     * get toString method
     */
    public function __toString() {
      return $this->getNombre();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return EncargadoLegislativo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}