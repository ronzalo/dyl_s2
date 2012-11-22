<?php

namespace Lyd\AdminBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Lyd\AdminBundle\Entity\Comision;

class LoadComisionData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {

    $comisiones = array(
      "17" => "C. DD.HH",
      "18" => "C. FAMILIA",
      "19" => "C. CIENCIAS Y TECNOLOGIA",
      "20" => "C. DE DROGAS",
      "21" => "C. PESCA",
      "22" => "C. DE BOMBEROS",
      "23" => "C. DESARROLLO DEL TURISMO",
      "24" => "C. CULTURA Y ARTES",
      "25" => "C. SEGURIDAD CIUDADANA",
      "26" => "C. PYME",
      "27" => "C. ZONAS EXTREMAS",
      "28" => "C. DISCAPACITADOS",
      "29" => "C. DEPORTES",
      "30" => "C. ESPECIAL DE LA JUVENTUD",
      "31" => "C. SUPERACIÓN DE LA POBREZA, PLANIFICACIÓN Y DESARROLLO",
      "32" => "C. ADULTO MAYOR"
    );

    foreach ($comisiones as $digito => $nombre) {
      $comision = new Comision();
      $comision->setDigito($digito);
      $comision->setNombre($nombre);
      $manager->persist($comision);
      $manager->flush();
    }
    
  }
}
?>
