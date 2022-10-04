<?php

namespace App\Controller;

use App\Entity\Book;
use App\Entity\Calendar;
use App\Repository\BookRepository;
use App\Repository\CalendarRepository;
use App\Repository\Newsletters\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(BookRepository $bookRepository,UsersRepository $usersRepository,CalendarRepository $calendarRepository): Response
    {
        $books = $bookRepository->findAll();
        $users = $usersRepository->findAll();
        


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'books' => $books,
            'users' => $users,
            'calendars' => $calendarRepository->findAll(),
        ]);
    }

}
