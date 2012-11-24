<?php

namespace Lyd\AdminBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Router;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware{
  
  protected $factory;

    /**
     * @param \Knp\Menu\FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param Request $request
     * @param Router  $router
     */
    public function createAdminMenu(Request $request)
    {
        $menu = $this->factory->createItem('root', array('childrenAttributes' => array('id' => 'main_navigation', 'class'=>'menu', 'style' => 'float: left;') ) );

        $registro = $menu->addChild('Registro', array('route' => 'Lyd_AdminBundle_Registro_legislativo_list'));
        $registro->setLinkAttributes(array('class'=>'sub main'));

        $comision = $menu->addChild('Comision', array('route' => 'Lyd_AdminBundle_Comision_list'));
        $comision->setLinkAttributes(array('class'=>'sub main'));

        $investigador = $menu->addChild('Investigador', array('route' => 'Lyd_AdminBundle_Investigador_list'));
        $investigador->setLinkAttributes(array('class'=>'sub main'));

        $ministerio = $menu->addChild('Ministerio', array('route' => 'Lyd_AdminBundle_Ministerio_list'));
        $ministerio->setLinkAttributes(array('class'=>'sub main'));

        return $menu;
    }
}

?>
