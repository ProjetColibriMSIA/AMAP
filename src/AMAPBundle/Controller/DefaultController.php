<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use AMAPBundle\Entity\Basket\Basket;
use AMAPBundle\Entity\Basket\Product;

class DefaultController extends Controller
{
    public function accueilAction()
    {

        //exemple Anthony
        /*$em = $this->getDoctrine()->getEntityManager();
        $rep = $em->getRepository("AMAPBundle:Basket\Basket");
        
        $bask = $rep->find(1);
        
        var_dump($bask->getProducts()[0]);
        
        return new \Symfony\Component\HttpFoundation\Response();

        */
        return $this->render('AMAPBundle:Default:accueil.html.twig');

    }
    public function producteurAction()
    {
        return $this->render('AMAPBundle:Default:producteur.html.twig');
    }
	public function actualitesAction()
    {
        return $this->render('AMAPBundle:Default:actualites.html.twig');
    }
	public function amapAction()
    {
        return $this->render('AMAPBundle:Default:amap.html.twig');
    }
	public function produitAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
        $rep = $em->getRepository("AMAPBundle:Basket\Product");
        $products = $rep->findAll();

		 //ar_dump($product[0]->getName());
		
        return $this->render('AMAPBundle:Default:produit.html.twig',array('products' => $products));
    }
}
