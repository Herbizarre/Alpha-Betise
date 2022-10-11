<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\CartServices;

class CartController extends AbstractController
{
    private $cartServices;

    public function __construct(CartServices $cartServices)
    {
        $this->cartServices = $cartServices;
    }
    /**
     * @Route("/cart", name="panier")
     */
    public function index(): Response
    {
        $cart = $this->cartServices->getFullCart();
        if (!isset($cart['books'])) {
            return $this->redirectToRoute('app_home');
        }

        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
            'cart' => $cart,

        ]);
    }

    /**
     * @Route("/cart/add/{id}", name="cartAdd")
     */
    public function addToCart($id): Response
    {
        $this->cartServices->addToCart($id);

        return $this->redirectToRoute('app_conseils');
    }

    /**
     * @Route("/cart/delete/{id}", name="cartDelete")
     */
    public function deleteFromCart($id): Response
    {
        $this->cartServices->deleteFromCart($id);

        return $this->redirectToRoute('panier');
    }

    /**
     * @Route("/cart/deleteAll/{id}", name="cartDeleteAll")
     */
    public function deleteAllCart($id): Response
    {
        $this->cartServices->deleteAllCart($id);

        return $this->redirectToRoute('panier');
    }
}
