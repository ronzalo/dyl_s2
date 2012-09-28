<?php

namespace Lyd\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lyd\AdminBundle\Entity\Comision
 */
class Comision
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
      return sprintf('%d - %s', $this->getId(), $this->getNombre());
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
     * @return Comision
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
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $registros;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->registros = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add registros
     *
     * @param Lyd\AdminBundle\Entity\RegistroLegislativo $registros
     * @return Comision
     */
    public function addRegistro(\Lyd\AdminBundle\Entity\RegistroLegislativo $registros)
    {
        $this->registros[] = $registros;
    
        return $this;
    }

    /**
     * Remove registros
     *
     * @param Lyd\AdminBundle\Entity\RegistroLegislativo $registros
     */
    public function removeRegistro(\Lyd\AdminBundle\Entity\RegistroLegislativo $registros)
    {
        $this->registros->removeElement($registros);
    }

    /**
     * Get registros
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRegistros()
    {
        return $this->registros;
    }
}