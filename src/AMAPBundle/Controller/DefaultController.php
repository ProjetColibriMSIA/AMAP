<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller {

    /**
     * @Route("/accueil")
     */
    public function homeAction() {

        //exemple Anthony
        /* $em = $this->getDoctrine()->getManager();
          $rep = $em->getRepository("AMAPBundle:Basket\Basket");

          $bask = $rep->find(1);

          var_dump($bask->getProducts()[0]);

          return new \Symfony\Component\HttpFoundation\Response();

         */

        return $this->render('AMAPBundle:Default:home.html.twig');
    }

    /**
     * @Route("/producteurs")
     */
    public function farmerAction() {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository("AMAPBundle:Account\User");
        $users = $rep->findAll();
        return $this->render('AMAPBundle:Default:farmer.html.twig', array('users' => $users));
    }

    /**
     * @Route("/actualites")
     */
    public function newsAction() {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository("AMAPBundle:Announcement\News");

        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $uneactu = $rep->find($id);
            return $this->render('AMAPBundle:Default:news.html.twig', array('actualite' => $uneactu));
        } else {
            $actus = $rep->findAll();
            return $this->render('AMAPBundle:Default:news.html.twig', array('actualites' => $actus));
        }
    }

    /**
     * @Route("/amap")
     */
    public function amapAction() {
        return $this->render('AMAPBundle:Default:amap.html.twig');
    }

    /**
     * @Route("/produit")
     */
    public function productAction() {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository("AMAPBundle:Basket\Product");
        $products = $rep->findAll();

        //ar_dump($product[0]->getName());

        return $this->render('AMAPBundle:Default:product.html.twig', array('products' => $products));
    }

}
