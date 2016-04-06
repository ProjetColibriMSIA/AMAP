<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConsumerController extends Controller
{
    public function indexAction()
    {
        return $this->render('AMAPBundle:Basket:basket.html.twig');
    }
}
