<?php
// src/AMAPBundle/Menu/Builder.php
namespace AMAPBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'amap_default_home'));

        // access services from the container!
        $em = $this->container->get('doctrine')->getManager();
        // findMostRecent and Blog are just imaginary examples
        $blog = $em->getRepository('AMAPBundle:Announcement\News')->findOneBy(array('id'=>1));

        $menu->addChild('Latest Blog Post', array(
            'route' => 'amap_default_news',
            'routeParameters' => array('id' => $blog->getId())
        ));

        // create another menu item
        $menu->addChild('Produit', array('route' => 'amap_default_product'));
        // you can also add sub level's to your menu's as follows
        $menu['Produit']->addChild('Amap', array('route' => 'amap_default_amap'));

        // ... add more children

        return $menu;
    }
}
?>