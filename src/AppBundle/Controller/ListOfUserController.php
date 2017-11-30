<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListOfUserController extends Controller
{
    /**
     * @Route("/")
     */
    public function showListOfUsersAction()
    {
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();

        return $this->render('view.html.twig', array('users' =>   $users));
    }
}
