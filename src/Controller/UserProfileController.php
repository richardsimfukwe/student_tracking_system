<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserProfileController extends AbstractController
{
    /**
     * @Route("/user/profile", name="user_profile")
     */
    public function index()
    {

        return $this->render('user_profile/index.html.twig', [
            'controller_name' => 'UserProfileController',

        ]);
    }
}
