<?php

namespace Lyd\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lyd\AdminBundle\Entity\Ministerio
 */
class Ministerio
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $nombre
     */
    private $nombre;


    public function __toString() {
      return sprintf('%d - %s', $this->getDigito(), $this->getNombre());
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
     * @return Ministerio
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
    /**
     * @var integer $digito
     */
    private $digito;


    /**
     * Set digito
     *
     * @param integer $digito
     * @return Ministerio
     */
    public function setDigito($digito)
    {
        $this->digito = $digito;
    
        return $this;
    }

    /**
     * Get digito
     *
     * @return integer 
     */
    public function getDigito()
    {
        return $this->digito;
    }
}