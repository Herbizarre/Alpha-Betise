<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Book;
use App\Repository\BookRepository;

class ConseilsController extends AbstractController
{
    /**
     * @Route("/conseils", name="app_conseils")
     */
    public function index(BookRepository $bookRepository): Response
    {
        $book = $bookRepository->findAll();

        return $this->render('conseils/index.html.twig', [
            'controller_name' => 'ConseilsController',
            'book' => $book,
        ]);
    }
}
