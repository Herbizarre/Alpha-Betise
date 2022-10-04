<?php

    namespace App\Services;

    use App\Repository\BookRepository;
    use Symfony\Component\HttpFoundation\Session\SessionInterface;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


    Class CartServices{

        private $session;
        private $bookRepository;
        private $tva = 0.1;

        public function __construct(SessionInterface $session, BookRepository $bookRepository){
            $this->session = $session;
            $this->bookRepository = $bookRepository;
        }

        public function addToCart($id){
            $cart = $this->getCart();
            
            if (isset($cart[$id])) {
                $cart[$id]++;
            } else {
                $cart[$id] = 1;
            }
            $this->updateCart($cart);
        }

        public function deleteFromCart($id){
            $cart = $this->getCart();
            //produit est dans le panier
            if(isset($cart[$id])){
                //quantity de produit supérieur à 1
                if($cart[$id] > 1){
                    $cart[$id]--;
                }else{
                    unset($cart[$id]);
                }
                $this->updateCart($cart);
            }
        }

        public function deleteAllCart($id){
            $cart = $this->getCart();
            if (isset($cart[$id])) {
                unset($cart[$id]);
            }
            $this->updateCart($cart);
        }

        public function deleteCart(){
            $this->updateCart([]);
        }

        public function updateCart($cart){
            $this->session->set('cart', $cart);
            $this->session->set('cartData', $this->getFullCart());
        }

        public function getCart(){
            return $this->session->get('cart',[]);
        }

        public function getFullCart(){
            $cart = $this->getCart();
            $fullCart = [];
            $quantity_cart = 0;
            $subTotal = 0;

            foreach($cart as $id => $quantity){
                $book = $this->bookRepository->find($id);

                if ($book) {
                    $fullCart['books'][]=
                    [
                        "quantity"=>$quantity,
                        "book"=>$book
                    ];
                    $quantity_cart += $quantity;

                    $subTotal += $quantity * $book ->getPriceBook()/100;
                } else {
                    $this->deleteFromCart($id);
                }

            }

            $fullCart['data']= [
                "quantity_cart"=>$quantity_cart,
                "subTotalHT"=>$subTotal,
                "Taxe"=>round($subTotal*$this->tva,2),
                "subTotalTTC"=>round(($subTotal+($subTotal*$this->tva)),2),
            ];
            return $fullCart;
        }
    }
