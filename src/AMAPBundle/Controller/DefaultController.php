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

        $result=$rep->findAllFirst();
        //exemple Anthony
        /* $em = $this->getDoctrine()->getManager();
          $rep = $em->getRepository("AMAPBundle:Basket\Basket");

          $bask = $rep->find(1);

         

          return new \Symfony\Component\HttpFoundation\Response();

         */
        return $this->render('AMAPBundle:Default:home.html.twig', array('results' => $result));
    }

    /**
     * @Route("/producteurs")
     */
    public function farmersAction() {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository("AMAPBundle:Account\User");
        $users = $rep->findAll();
        return $this->render('AMAPBundle:Default:farmer.html.twig', array('users' => $users));
    }

    /**
     * @Route("/actualites", defaults={"id" = -1})
     * @Route("/actualites/{id}")
     */
    public function newsAction($id) {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository("AMAPBundle:Announcement\News");
        if ($id!=-1) {
            $anew = $rep->find($id);
            return $this->render('AMAPBundle:Default:news.html.twig', array('new' => $anew));
        } else {
            $news = $rep->findAll();
            return $this->render('AMAPBundle:Default:news.html.twig', array('news' => $news));
        }
    }

    /**
     * @Route("/amaps")
     */
    public function amapsAction() {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository("AMAPBundle:AMAP\AMAP");
   
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $amap = $rep->find($id);
            return $this->render('AMAPBundle:Default:amap.html.twig', array('amap' => $amap));
        } else {
            $amaps = $rep->findAll();
            return $this->render('AMAPBundle:Default:amap.html.twig', array('amaps' => $amaps));
        }
		
    }

    /**
     * @Route("/produits")
     */
    public function productsAction() {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository("AMAPBundle:Basket\Product");
        $products = $rep->findAll();

        //ar_dump($product[0]->getName());

        return $this->render('AMAPBundle:Default:product.html.twig', array('products' => $products));
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
