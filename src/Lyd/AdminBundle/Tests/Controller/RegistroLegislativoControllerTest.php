<?php

namespace Lyd\AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistroLegislativoControllerTest extends WebTestCase
{
    /** @test */
    public function mostrarIndexRegistroLegislativo()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Create a new entry in the fbsql_database(link_identifier)
        $crawler = $client->request('GET', '/admin/registro_legislativo/');
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
        $crawler = $client->click($crawler->selectLink('Nuevo')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Guardar')->form(array(
            'new_registrolegislativo[numero_boletin]'  => '6969',
            'new_registrolegislativo[comision]'  => '2',
            'new_registrolegislativo[fecha_cuenta]'  => '2012-11-11',
            'new_registrolegislativo[estado]'  => 'activo',
            'new_registrolegislativo[iniciativa]'  => 'mocion',
            'new_registrolegislativo[origen]'  => 'camara',
            'new_registrolegislativo[suma_proyecto]'  => 'asdasd asdasd',
            'new_registrolegislativo[resumen]'  => 'asdaksldj',
            'new_registrolegislativo[descriptor]'  => 'asdaksldj',
            'new_registrolegislativo[resena]'  => 'asdaksldj',
            'new_registrolegislativo[fecha_resena]'  => '2012-11-11',
            'new_registrolegislativo[reglamentos]'  => 'asdaksldj',
            'new_registrolegislativo[fecha_diario_oficial]'  => '2012-11-11',
            'new_registrolegislativo[observaciones]'  => 'asdaksldj',
            'new_registrolegislativo[encargado_legislativo]'  => 'asdaksldj'
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertTrue($crawler->filter('hq:contains("Registros Legislativos")')->count() > 0);

        
    }

    
}