<?php
// src/AMAPBundle/Menu/Builder.php
namespace AMAPBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        
        $menu = $factory-> createItem ('root');
        $menu->setChildrenAttributes (array('class'=>'mediumMenu'));
        
        //on récupère la route active déclaré dans le base twig
        $routeActive=$options['route'];
        
        $menu->addChild('Accueil', array('route' => 'amap_default_home', 'attributes' => array('id'=>'amap_default_home','class'=> 'navHome')));

        $menu->addChild('Actualités', array('route' => 'amap_default_news', 'attributes' => array('id'=>'amap_default_news','class'=> 'navNews')));

        $menu->addChild('Producteurs', array('route' => 'amap_default_farmers', 'attributes' => array('id'=>'amap_default_farmers','class'=> 'navFarmers')));

        $menu->addChild('L\'AMAP', array('route' => 'amap_default_amap', 'attributes' => array('id'=>'amap_default_amap','class'=> 'navAMAP')));

        $menu->addChild('Produits', array('route' => 'amap_default_product', 'attributes' => array('id'=>'amap_default_product','class'=> 'navProducts')));

        Foreach ($menu as $child)
        {
            if ($child->GetAttribute('id')==$routeActive)
            {
                $child->setAttribute('class', $child->GetAttribute('class').'Active');
            }
        }
    
        return $menu;
    }
    public function secondMenu(FactoryInterface $factory, array $options)
    {
        
        $menu = $factory-> createItem ('root');
        $menu->setChildrenAttributes (array('class'=>'nav navbar-nav smallMenu words'));
        
        //on récupère la route active déclaré dans le base twig
        $routeActive=$options['route'];
        
        $menu->addChild('Accueil', array('route' => 'amap_default_home', 'attributes' => array('id'=>'amap_default_home','class'=> 'navHome')));

        $menu->addChild('Actualités', array('route' => 'amap_default_news', 'attributes' => array('id'=>'amap_default_news','class'=> 'navNews')));

        $menu->addChild('Producteurs', array('route' => 'amap_default_farmers', 'attributes' => array('id'=>'amap_default_farmers','class'=> 'navFarmers')));

        $menu->addChild('L\'AMAP', array('route' => 'amap_default_amap', 'attributes' => array('id'=>'amap_default_amap','class'=> 'navAMAP')));

        $menu->addChild('Produits', array('route' => 'amap_default_product', 'attributes' => array('id'=>'amap_default_product','class'=> 'navProducts')));

        $menu->addChild('Se connecter', array('attributes' => array('class'=> 'navConnect','data-toggle'=>'modal','data-target'=>'#ModalConnect')));
        //$menu['Se connecter']->setUri('');
        //,'linkAttributes'=> array('data-toggle'=>'modal','data-target'=>'#ModalConnect')
       // , array('attributes' => array('data-toggle'=>'modal','data-target'=>'#myModal','class'=> 'navConnect'))
            
        Foreach ($menu as $child)
        {
            if ($child->GetAttribute('id')==$routeActive)
            {
                $child->setAttribute('class', $child->GetAttribute('class').'Active');
            }
        }
    
        return $menu;
    }
    
}
?>