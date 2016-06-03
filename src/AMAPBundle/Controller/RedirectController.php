<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RedirectController extends Controller
{
    public function redirectAction() {
        return $this->redirectToRoute('accueil');
    }
}
