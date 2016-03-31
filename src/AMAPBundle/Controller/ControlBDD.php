<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ControlBDD extends Controller
{
    public function indexAction()
    {
        return $this->render('AMAPBundle:Default:index.html.twig');
    }
}
