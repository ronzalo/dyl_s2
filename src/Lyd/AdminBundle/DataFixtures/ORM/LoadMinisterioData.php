<?php

namespace Lyd\AdminBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Lyd\AdminBundle\Entity\Ministerio;

class LoadMinisterioData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {

    $ministerios = array(
      "1" => "M. AGRICULTURA",
      "2" => "M. DEFENSA NACIONAL",
      "3" => "M. ECONOMIA, F. y R.",
      "4" => "M. EDUCACION",
      "5" => "M. HACIENDA",
      "6" => "M. INTERIOR",
      "7" => "M. JUSTICIA",
      "8" => "M. MINERIA",
      "9" => "M. OBRAS PUBLICAS",
      "10" => "M. RELAC. EXTERIORES",
      "11" => "M. SALUD",
      "12" => "M. BIENES NACIONALES",
      "13" => "M. TRABAJO Y PREVISIÓN SOCIAL",
      "14" => "M. VIVIENDA y U.",
      "15" => "M. TRANSPORTES y TT.",
      "16" => "M. CONGRESO NACIONAL",
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

    foreach ($ministerios as $digito => $nombre) {
      $ministerio = new Ministerio();
      $ministerio->setDigito($digito);
      $ministerio->setNombre($nombre);
      $manager->persist($ministerio);
      $manager->flush();
    }
    
  }
}
?>
