<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReadingTipsController extends AbstractController
{
    /**
     * @Route("/reading/tips", name="app_reading_tips")
     */
    public function index(): Response
    {
        return $this->render('reading_tips/index.html.twig', [
            'controller_name' => 'ReadingTipsController',
        ]);
    }
}
