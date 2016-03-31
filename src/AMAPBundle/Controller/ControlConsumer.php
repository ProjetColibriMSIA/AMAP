<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ControlConsumer extends Controller
{
    public function indexAction()
    {
        return $this->render('AMAPBundle:Default:index.html.twig');
    }
}
