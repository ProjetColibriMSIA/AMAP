<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AMAPBundle:Default:index.html.twig');
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
        return $this->render('AMAPBundle:Default:produit.html.twig');
    }
}
