<?php

namespace App\Controller;

use App\Entity\Book;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailsBookController extends AbstractController
{
    /**
     * @Route("/details", name="app_details_book")
     */
    public function index(): Response
    {
        return $this->render('details_book/index.html.twig', [
            'controller_name' => 'DetailsBookController',
        ]);
    }

    /**
     * @Route("/{id}/details", name="app_details_book", methods={"GET"})
     */
    public function showBook(BookRepository $bookRepository, Book $book): Response
    {
        return $this->render('details_book/index.html.twig', [
            'book' => $book,
        ]);
    }
}
