<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FarmerController extends Controller {

    /**
     * @Route("/producteur")
     */
    public function indexAction() {
        return $this->render('AMAPBundle:Farmer:index.html.twig');
    }
    /**
     * @Route("/producteur/gestion_AMAP")
     */
    public function amapAction() {
        return $this->render('AMAPBundle:Farmer:index.html.twig', array('products' => $products));
    }

}
