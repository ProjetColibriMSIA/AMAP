<?php

namespace AMAPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdministratorController extends Controller {

    /**
     * @Route("/admin")
     */
    public function indexAction() {
        return $this->render('AMAPBundle:ApplicationManager:index.html.twig');
    }

    /**
     * @Route("/admin/config_utilisateur")
     */
    public function managerUserAction() {
        $userManager = $this->container->get('fos_user.user_manager');
        $user = new \AMAPBundle\Entity\Account\User();
        $user->setUsername('user12');
        $user->setEmail('mye2mail@yopmail.com');
        $user->setName('mdr2');
        $user->setFirstName('lo2l');
        $user->setAdress('62 rue machin');
        $user->setPlainPassword('2test');
        $user->setEnabled(true);
        $user->setSuperAdmin(false);
        $userManager->updateUser($user);
        return $this->render('AMAPBundle:ApplicationManager:manageUser.html.twig');
    }
    /**
     * @Route("/admin/config_groupe")
     */
    public function manageGroupAction($nameGroup) {
        $em = $this->getDoctrine()->getEntityManager();
        $farmerGroup = new \AMAPBundle\Entity\Account\Group($nameGroup);
        $farmerGroup->addRole('ROLE_USER');
        $em->persist($farmerGroup);

        $em->flush();
        return $this->render('AMAPBundle:ApplicationManager:manageGroup.html.twig');
    }
    /**
     * @Route("/admin/config_amap")
     */
    public function manageAMAPAction($nameGroup) {
        $em = $this->getDoctrine()->getEntityManager();
        $farmerGroup = new \AMAPBundle\Entity\Account\Group($nameGroup);
        $farmerGroup->addRole('ROLE_USER');
        $em->persist($farmerGroup);

        $em->flush();
        return $this->render('AMAPBundle:ApplicationManager:manageAMAP.html.twig');
    }

}
