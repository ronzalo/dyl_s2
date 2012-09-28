<?php

namespace Lyd\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lyd\AdminBundle\Entity\RegistroLegislativo
 */
class RegistroLegislativo
{
  
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $numero_boletin
     */
    private $numero_boletin;

    /**
     * @var string $suma_proyecto
     */
    private $suma_proyecto;
    
    /**
     * @var boolean $estado
     */
    private $estado;


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
     * Set estado
     *
     * @param boolean $estado
     * @return RegistroLegislativo
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
    }
    
    /**
     * Set numero_boletin
     *
     * @param integer $numeroBoletin
     * @return RegistroLegislativo
     */
    public function setNumeroBoletin($numeroBoletin)
    {
        $this->numero_boletin = $numeroBoletin;
    
        return $this;
    }

    /**
     * Get numero_boletin
     *
     * @return integer 
     */
    public function getNumeroBoletin()
    {
        return $this->numero_boletin;
    }

    /**
     * Set suma_proyecto
     *
     * @param string $sumaProyecto
     * @return RegistroLegislativo
     */
    public function setSumaProyecto($sumaProyecto)
    {
        $this->suma_proyecto = $sumaProyecto;
    
        return $this;
    }

    /**
     * Get suma_proyecto
     *
     * @return string 
     */
    public function getSumaProyecto()
    {
        return $this->suma_proyecto;
    }
    /**
     * @var \DateTime $fecha_cuenta
     */
    private $fecha_cuenta;


    /**
     * Set fecha_cuenta
     *
     * @param \DateTime $fechaCuenta
     * @return RegistroLegislativo
     */
    public function setFechaCuenta($fechaCuenta)
    {
        $this->fecha_cuenta = $fechaCuenta;
    
        return $this;
    }

    /**
     * Get fecha_cuenta
     *
     * @return \DateTime 
     */
    public function getFechaCuenta()
    {
        return $this->fecha_cuenta;
    }
    /**
     * @var string $origen
     */
    private $origen;

    /**
     * @var string $resumen
     */
    private $resumen;

    /**
     * @var string $descriptor
     */
    private $descriptor;

    /**
     * @var string $resena
     */
    private $resena;


    /**
     * Set origen
     *
     * @param string $origen
     * @return RegistroLegislativo
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;
    
        return $this;
    }

    /**
     * Get origen
     *
     * @return string 
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set resumen
     *
     * @param string $resumen
     * @return RegistroLegislativo
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;
    
        return $this;
    }

    /**
     * Get resumen
     *
     * @return string 
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set descriptor
     *
     * @param string $descriptor
     * @return RegistroLegislativo
     */
    public function setDescriptor($descriptor)
    {
        $this->descriptor = $descriptor;
    
        return $this;
    }

    /**
     * Get descriptor
     *
     * @return string 
     */
    public function getDescriptor()
    {
        return $this->descriptor;
    }

    /**
     * Set resena
     *
     * @param string $resena
     * @return RegistroLegislativo
     */
    public function setResena($resena)
    {
        $this->resena = $resena;
    
        return $this;
    }

    /**
     * Get resena
     *
     * @return string 
     */
    public function getResena()
    {
        return $this->resena;
    }
    /**
     * @var \DateTime $fecha_resena
     */
    private $fecha_resena;


    /**
     * Set fecha_resena
     *
     * @param \DateTime $fechaResena
     * @return RegistroLegislativo
     */
    public function setFechaResena($fechaResena)
    {
        $this->fecha_resena = $fechaResena;
    
        return $this;
    }

    /**
     * Get fecha_resena
     *
     * @return \DateTime 
     */
    public function getFechaResena()
    {
        return $this->fecha_resena;
    }
    /**
     * @var string $iniciativa
     */
    private $iniciativa;


    /**
     * Set iniciativa
     *
     * @param string $iniciativa
     * @return RegistroLegislativo
     */
    public function setIniciativa($iniciativa)
    {
        $this->iniciativa = $iniciativa;
    
        return $this;
    }

    /**
     * Get iniciativa
     *
     * @return string 
     */
    public function getIniciativa()
    {
        return $this->iniciativa;
    }
    /**
     * @var Lyd\AdminBundle\Entity\Comision
     */
    private $comision;


    /**
     * Set comision
     *
     * @param Lyd\AdminBundle\Entity\Comision $comision
     * @return RegistroLegislativo
     */
    public function setComision(\Lyd\AdminBundle\Entity\Comision $comision = null)
    {
        $this->comision = $comision;
    
        return $this;
    }

    /**
     * Get comision
     *
     * @return Lyd\AdminBundle\Entity\Comision 
     */
    public function getComision()
    {
        return $this->comision;
    }
}