<?php

namespace App\Controller;

use App\Entity\Department;
use App\Entity\Gender;
use App\Entity\Person;
use App\Entity\PersonType;
use App\Form\PersonFormType;
use Doctrine\ORM\QueryBuilder;
use Exception;
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
//        $repository = $this->getDoctrine()->getRepository(PersonType::class);
        // look for *all* Product objects
        $personType = $this->getDoctrine()->getRepository(PersonType::class)->findAll();
        $department = $this->getDoctrine()->getRepository(Department::class)->findAll();
        $gender = $this->getDoctrine()->getRepository(Gender::class)->findAll();

        return $this->render('staff/index.html.twig', [
            'controller_name' => 'StaffController',
            'personType'=>$personType,
            'department'=>$department,
            'gender'=>$gender

        ]);
    }

    /**
     * @Route("/Addstaff", name="Addstaff")
     * @throws Exception
     */
    public function createPerson(Request $request): Response
    {
        
//        // you can fetch the EntityManager via $this->getDoctrine()
//        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $person = new Person();

        $person->setFname($request->query->get('firstname'));
        $person->setLname($request->query->get('lastname'));
        $person->setAddress($request->query->get('address'));
        $person->setMobileNo($request->query->get('mobileno'));

        $person->setDob(new \DateTime($request->query->get('dob')));
        $person->setPostcode($request->query->get('postcode'));
       $person->setPersonImage($request->query->get('imageico'));
        var_dump($request->query->get('department'));

        //$ptype = $this->getDoctrine()->getRepository(Department::class)->find($request->query->get('department'));

        $person->setDepartment($this->getDoctrine()->getRepository(Department::class)->find($request->query->get('department')));
        $person->setDescription($request->query->get('description'));
        $person->setGender($this->getDoctrine()->getRepository(Gender::class)->find($request->query->get('gender')));
        $person->setSocialUrl($request->query->get('socialUrl'));
        $person->setPersonId($request->query->get('password'));
        $person->setEmail($request->query->get('email'));
        $person->setPersonType($this->getDoctrine()->getRepository(PersonType::class)->find($request->query->get('personType')));




        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($person);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$person->getId());
    }

    /**
     * @Route("/viewStaff", name="viewStaff")
     */
    public function viewStaff()
    {
        // look for *all* Product objects
        $repository = $this->getDoctrine()->getRepository(Person::class);
        $staffMembers = $repository->findAll();
        //getting staff dept and gender
        //var_dump($staffMembers);



        return $this->render('staff/view.html.twig', [
            'controller_name' => 'StaffController',
            'staffMembers' => $staffMembers,


        ]);
    }
}
