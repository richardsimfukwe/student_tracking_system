<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StafSampleController extends AbstractController
{
    /**
     * @Route("/staf/sample", name="staf_sample")
     */
    public function index()
    {
        return $this->render('staf_sample/index.html.twig', [
            'controller_name' => 'StafSampleController',
        ]);
    }
}
