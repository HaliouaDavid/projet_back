<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class IdController extends AbstractController
{
    /**
     * @return Response
     * @Route("/getid/{email}", name="getid", methods={"GET"})
     */
    public function getId($email, UserRepository $userRepository)
    {
        $user = $userRepository->findOneByEmail($email);
        $idUser = $user->getId();

        $response = new JsonResponse(array('id' => $idUser));

        return $response;
    }
}