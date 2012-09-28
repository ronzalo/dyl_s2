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
        $menu = $this->factory->createItem('root', array('childrenAttributes' => array('id' => 'main_navigation', 'class'=>'menu') ) );

        $help = $menu->addChild('Admin', array('uri' => '#'));
        $help->setLinkAttributes(array('class'=>'sub main'));

        $help->addChild('Comision', array('route' => 'Lyd_AdminBundle_Comision_list'));
        $help->addChild('Registro', array('route' => 'Lyd_AdminBundle_Registro_legislativo_list'));


        return $menu;
    }
}

?>
