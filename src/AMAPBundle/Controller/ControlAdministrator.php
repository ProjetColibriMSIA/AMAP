<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ControlAdministrator extends Controller
{
    public function indexAction()
    {
        return $this->render('AMAPBundle:Default:index.html.twig');
    }
}
