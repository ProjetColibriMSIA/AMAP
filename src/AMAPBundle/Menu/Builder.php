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
        //on récupère la route active déclaré dans le base twig
        $routeActive=$options['route'];
        $menuClass=$options['menu'];
        if ($menuClass=='smallMenu')
        {
            $class='nav navbar-nav smallMenu words';
        }
        else
        {
            $class=$menuClass;
        }
        
        $menu = $factory-> createItem ('root');
        
        $menu->setChildrenAttributes (array('class'=>$class));
        
      
        
        $menu->addChild('Accueil', array('route' => 'amap_default_home', 'attributes' => array('id'=>'amap_default_home','class'=> 'navHome')));

        $menu->addChild('Actualités', array('route' => 'amap_default_news', 'attributes' => array('id'=>'amap_default_news','class'=> 'navNews')));

        $menu->addChild('Producteurs', array('route' => 'amap_default_farmers', 'attributes' => array('id'=>'amap_default_farmers','class'=> 'navFarmers')));

        $menu->addChild('L\'AMAP', array('route' => 'amap_default_amaps', 'attributes' => array('id'=>'amap_default_amaps','class'=> 'navAMAP')));

        $menu->addChild('Produits', array('route' => 'amap_default_products', 'attributes' => array('id'=>'amap_default_products','class'=> 'navProducts')));

        if ($menuClass=='smallMenu')
        {
             $menu->addChild('Se connecter', array('attributes' => array('class'=> 'navConnect','data-toggle'=>'modal','data-target'=>'#ModalConnect')));
        }
        
           
        
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