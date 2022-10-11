<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Book;

class ConseilsController extends AbstractController
{
    /**
     * @Route("/conseils", name="app_conseils")
     */
    public function index(BookRepository $bookRepository): Response
    {
        $book = $bookRepository->findBy(
            [], ['publicationDate' => 'DESC'], null, null );

        return $this->render('conseils/index.html.twig', [
            'controller_name' => 'ConseilsController',
            'book' => $book,
        ]);
    }
}
