<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataRolesController extends AbstractController
{
    /**
     * @Route("/data", name="app_data_roles")
     */
    public function index(UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {

        $userAdmin=$userRepository->find(1);
        $userAdmin->setRoles(['ROLE_ADMIN']);
        $entityManager->flush();

        return $this->render('data_roles/index.html.twig', [
            'controller_name' => 'DataRolesController',
        ]);
    }
}
