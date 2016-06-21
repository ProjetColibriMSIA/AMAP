<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AppBundle\Form\UserType;
use AppBundle\Entity\Account\User;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/accueil")
     */
    public function homeAction() {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository("AMAPBundle:Announcement\News");

        $result = $rep->findAllFirst();
        //exemple Anthony
        /* $em = $this->getDoctrine()->getManager();
          $rep = $em->getRepository("AMAPBundle:Basket\Basket");

          $bask = $rep->find(1);



          return new \Symfony\Component\HttpFoundation\Response();

         */
        return $this->render('AMAPBundle:Default:home.html.twig', array('results' => $result));
    }

    /**
     * @Route("/producteurs", defaults={"id" = -1})
     * @Route("/producteurs/{id}")
     */
    public function farmersAction($id) {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository("AMAPBundle:Account\User");
        if ($id != -1) {
            $user = $rep->find($id);
            return $this->render('AMAPBundle:Default:farmer.html.twig', array('user' => $user));
        } else {
            $users = $rep->findAll();
            return $this->render('AMAPBundle:Default:farmer.html.twig', array('users' => $users));
        }
    }

    /**
     * @Route("/actualites", defaults={"id" = -1})
     * @Route("/actualites/{id}")
     */
    public function newsAction($id) {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository("AMAPBundle:Announcement\News");
        if ($id != -1) {
            $anew = $rep->find($id);
            return $this->render('AMAPBundle:Default:news.html.twig', array('new' => $anew));
        } else {
            $news = $rep->findAll();
            return $this->render('AMAPBundle:Default:news.html.twig', array('news' => $news));
        }
    }

    /**
     * @Route("/amaps", defaults={"id" = -1})
     * @Route("/amaps/{id}")
     */
    public function amapsAction($id) {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository("AMAPBundle:AMAP\AMAP");

        if ($id != -1) {
            $amap = $rep->find($id);
            return $this->render('AMAPBundle:Default:amap.html.twig', array('amap' => $amap));
        } else {
            $amaps = $rep->findAll();
            return $this->render('AMAPBundle:Default:amap.html.twig', array('amaps' => $amaps));
        }
    }

    /**
     * @Route("/produits", defaults={"id" = -1})
     * @Route("/produits/{id}")
     */
    public function productsAction($id) {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository("AMAPBundle:Basket\Product");

        if ($id != -1) {
            $product = $rep->find($id);
            return $this->render('AMAPBundle:Default:product.html.twig', array('product' => $product));
        } else {
            $products = $rep->findAll();
            return $this->render('AMAPBundle:Default:product.html.twig', array('products' => $products));
        }
    }

    /**
     * @Route("/register")
     */
    public function registerAction(Request $request) {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('/acceuil');
        }

        return $this->render(
                        'registration/register.html.twig', array('form' => $form->createView())
        );
    }

    /**
     * @Route("/contact")
     */
    public function contactAction() {
        return $this->render('AMAPBundle:Default:contact.html.twig');
    }

    /**
     * @Route("/conditions")
     */
    public function conditionsAction() {
        return $this->render('AMAPBundle:Default:conditions.html.twig');
    }

}
