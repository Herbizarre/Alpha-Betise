<?php

namespace App\Controller;

use App\Entity\Newsletters\Users;
use App\Form\NewslettersUsersType;
use Doctrine\Persistence\AbstractManagerRegistry;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/newsletters", name="newsletters",)
 */
class NewslettersController extends AbstractController
{
    /**
     * @Route("/", name="homeNewsletters",)
     */
    public function index(Request $request, ManagerRegistry $managerRegistry, MailerInterface $mailerInterface): Response
    {
        $user = new Users();
        $form = $this->createForm(NewslettersUsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $token = hash('sha256', uniqid());

            $user->setValidationToken($token);

            $em = $managerRegistry->getManager();
            $em->persist($user);
            $em->flush();

            // $email= (new TemplatedEmail())//Template d'envoi de mail (créer une page template)
            // ->from('ydumirier@live.fr')// email envoyé par le site
            // ->to($user->getEmail())// l'email est adressé a (l'utilisateur)
            // ->subject('Inscription à la Newsletter')// Sujet de l'email
            // ->htmlTemplate('emails/mailerNewsletters.html.twig')// Form de l'email
            // ->context(compact('user','token'))//information envoyer
            // ;

            // $mailerInterface->send($email);

            $this->addFlash('message', 'Inscription en attente de validation,Verifier vos mails.');
            return $this->render('newsletters/waiting.html.twig');
        }

        return $this->render('newsletters/index.html.twig', [
            'form' => $form->createView(),
        ]);
        
    }

    /**
     * @Route("/confirm/{id}/{token}", name="comfirm")
     */
    public function confirm(Users $user,ManagerRegistry $managerRegistry, $token): Response
    {
        if($user->getValidationToken() != $token){
            throw $this->createNotFoundException('Page non trouvée');
        }
        $user->setIsValid(true);
        $em = $managerRegistry->getManager();
        $em->persist($user);
        $em->flush();

        return $this->render('newsletters/actived.html.twig', [
            $this->addFlash('message','Compte activé')
        ]);
    }


}
