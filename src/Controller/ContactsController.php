<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactsController extends AbstractController
{
    /**
     * @Route("/contacts", name="app_contacts")
     */
    public function index(): Response
    {
        $form=$this->createForm(ContactType::class);
        return $this->renderForm('contacts/index.html.twig', [
            'controller_name' => 'ContactsController',
            'formulaire'=>$form
        ]);
    }
}
