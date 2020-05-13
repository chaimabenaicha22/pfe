<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Repository\EmployeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;

class EmployeController extends AbstractController
{
    /**
     * @Route("/api/employe", name="api_employe" , methods="Get")
     */
    public function index(EmployeRepository $employeRepository)
    {
        return  $this->json($employeRepository->findAll(), 200, [], ['groups' => 'emp:read']);
    }
    /**
     * @Route("/api/employe", name="api_employe_create" , methods="Post")
     */
    public function create(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator)
    {


        try {
            $jsonRecu = $request->getContent();
            $employee = $serializer->deserialize($jsonRecu, Employe::class, 'json');
            $employee->setDateRecrutement(new \DateTime());
            $errors = $validator->validate($employee);

            if (count($errors) > 0) {
                return $this->json($errors, 400);
            }
            $em->persist($employee);
            $em->flush();
            //dd($employee);
            return  $this->json($employee, 201, [], ['groups' => 'emp:read']);
        } catch (NotEncodableValueException $e) {
            return $this->json([
                "status" => 400,
                "message" => $e->getMessage()
            ], 400);
        }
    }
}
