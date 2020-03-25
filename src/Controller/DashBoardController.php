<?php

namespace App\Controller;

use App\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashBoardController extends AbstractController
{
    /**
     * @Route("/dash/board", name="dash_board")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

//        $username = $request->query->get('username');
//        $password = $request->query->get('password');
//        $repository = $this->getDoctrine()->getRepository(Person::class);
        $person = $this->getDoctrine()->getRepository(Person::class)->findOneBy([
            'email' => $request->query->get('username'),
            'personId' => $request->query->get('password')
        ]);



        if (!$person) {
            throw $this->createNotFoundException(
                'No product found for id ' . $request->query->get('password')
            );
        } else if ($person) {
            return $this->render('dash_board/index.html.twig', [
                'controller_name' => 'DashBoardController',
                'Pdata' => $person
            ]);
        }
    }
}
