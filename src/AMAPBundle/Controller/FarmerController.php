<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FarmerController extends Controller
{
    public function indexAction()
    {
        return $this->render('AMAPBundle:Farmer:index.html.twig');
    }
    public function amapAction()
    {
        return $this->render('AMAPBundle:Farmer:index.html.twig',array('products' => $products));
    }
}
