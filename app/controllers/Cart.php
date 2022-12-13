<?php
namespace app\controllers;

class Cart extends \app\core\Controller{

	public function addToCart($product_id){
        $cart= new \app\models\Cart();
        if($cart->get($_SESSION['user_id'], $product_id)){
            $cart->product_count = $cart->product_count+1;
            $cart->updateCount();
            header('location:/Product/index?Message=Cart updated');
        }else{
            $cart->user_id = $_SESSION['user_id'];
            $cart->product_id = $product_id;
            $cart->product_count = 1;
            $cart->insert();
            header('location:/Product/index?Message=Item added to cart');
        }
    }


	public function index(){
		$cart = new \app\models\Cart();
		$product = $cart->getCartProducts($_SESSION['user_id']);
		$cart = new \app\models\Cart();
		$cart = $cart->getByUser($_SESSION['user_id']);
		$this->view('Cart/index', ['product'=>$product, 'cart'=>$cart]);
	}

	public function deleteFromCart($product_id){
		$cart = new \app\models\Cart();
		$cart = $cart->getByUser($_SESSION['user_id']);

		$cartItem = new \app\models\Cart();
		$cartItem = $cartItem->get($_SESSION['user_id'], $product_id);
		$cartItem->delete();
		$this->view('cart/index');
	}
}