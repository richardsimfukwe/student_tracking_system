<?php

namespace App\Controller;

use App\Entity\Person;
use App\Form\PersonFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaffController extends AbstractController
{
    /**
     * @Route("/staff", name="staff")
     */
    public function index()
    {
        $person = new Person();
        // ...

        $form = $this->createForm(PersonFormType::class, $person);
        return $this->render('staff/index.html.twig', [
            'controller_name' => 'StaffController',
            'form' => $form->createView(),
        ]);
    }

    public function createPerson(Request $request): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $person = new Person();
//        $person->setName($request->query->get('username'));
//        $person->setPrice($request->query->get('username'));
//        $person->setDescription($request->query->get('username'));
//        $person->setName($request->query->get('username'));
//        $person->setPrice($request->query->get('username'));
//        $person->setName($request->query->get('username'));
//        $person->setPrice($request->query->get('username'));
//        $person->setDescription($request->query->get('username'));
//        $person->setName($request->query->get('username'));
//        $person->setPrice($request->query->get('username'));
//        $person->setName($request->query->get('username'));
//        $person->setPrice($request->query->get('username'));
//        $person->setDescription($request->query->get('username'));
//        $person->setName($request->query->get('username'));
//        $person->setPrice($request->query->get('username'));
//        $person->setName($request->query->get('username'));
//        $person->setPrice($request->query->get('username'));
//        $person->setDescription($request->query->get('username'));
//        $person->setName($request->query->get('username'));
//        $person->setPrice($request->query->get('username'));



        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($person);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$person->getId());
    }
}
