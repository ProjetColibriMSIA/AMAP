<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller {

    /**
     * @Route("/accueil")
     */
    public function accueilAction() {

        //exemple Anthony
        /* $em = $this->getDoctrine()->getEntityManager();
          $rep = $em->getRepository("AMAPBundle:Basket\Basket");

          $bask = $rep->find(1);

          var_dump($bask->getProducts()[0]);

          return new \Symfony\Component\HttpFoundation\Response();

         */

        /*
          $group = new \AMAPBundle\Entity\Account\Group('Farmer');

          $group->addRole('ROLE_USER');
         */

        return $this->render('AMAPBundle:Default:accueil.html.twig');
    }

    /**
     * @Route("/producteur")
     */
    public function producteurAction() {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository("AMAPBundle:Account\User");
        $users = $rep->findAll();
        return $this->render('AMAPBundle:Default:producteur.html.twig', array('users' => $users));
    }

    /**
     * @Route("/actualites")
     */
    public function actualitesAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $rep = $em->getRepository("AMAPBundle:Actualites\actualites");

        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $uneactu = $rep->find($id);
            return $this->render('AMAPBundle:Default:actualites.html.twig', array('actualite' => $uneactu));
        } else {
            $actus = $rep->findAll();
            return $this->render('AMAPBundle:Default:actualites.html.twig', array('actualites' => $actus));
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
    public function produitAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $rep = $em->getRepository("AMAPBundle:Basket\Product");
        $products = $rep->findAll();

        //ar_dump($product[0]->getName());

        return $this->render('AMAPBundle:Default:produit.html.twig', array('products' => $products));
    }

}
