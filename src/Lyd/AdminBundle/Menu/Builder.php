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

        $admin = $menu->addChild('Admin', array('uri' => '#'));
        $admin->setLinkAttributes(array('class'=>'sub main'));

        $admin->addChild('Comision', array('route' => 'Lyd_AdminBundle_Comision_list'));
        $admin->addChild('Registro', array('route' => 'Lyd_AdminBundle_Registro_legislativo_list'));
        
        $extra = $menu->addChild('Extra', array('uri' => '#'));
        $extra->setLinkAttributes(array('class'=>'sub main'));

        $extra->addChild('Investigador', array('route' => 'Lyd_AdminBundle_Investigador_list'));
        $extra->addChild('Ministerio', array('route' => 'Lyd_AdminBundle_Ministerio_list'));


        return $menu;
    }
}

?>
