<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/producteur")
 */
class FarmerController extends Controller {

    /**
     * @Route("/")
     */
    public function indexAction() {
        return $this->render('AMAPBundle:Farmer:index.html.twig');
    }

    /**
     * @Route("/home")
     */
    public function homeAction() {
        return $this->render('AMAPBundle:Farmer:index.html.twig');
    }

    /**
     * @Route("/gestion_AMAP")
     */
    public function amapAction() {
        return $this->render('AMAPBundle:Farmer:index.html.twig', array('products' => $products));
    }

}
