<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListOfUserController extends Controller
{
    public function showListOfUsersAction()
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Access denied');
    }
}
