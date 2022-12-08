<?php
namespace app\controllers;

class Cart extends \app\core\Controller{

	public function addToCart($product_id){
		$product = new \app\models\product();
		$product = $product->get($product_id);
		if(isset($_POST['action'])){
			$cart = new \app\models\Cart();
			$cart = $cart->getByUser($_SESSION['user_id']);

			

			$cart->product_id = $product_id;
			$cart->product_count = $_POST['product_count'];
			$cart->insert();
			$this->view('Product/index', $product);
		}else{
			$this->view('Product/index', $product);
		}
	}

	public function index(){
		$cart = new app\models\Cart();
		$cart = $cart->getByUser($_SESSION['user_id']);
		$this->view('Cart/index');
	}

	public function deleteFromCart($product_id){
		$cart = new app\models\Cart();
		$cart = $cart->getByUser($_SESSION['user_id']);

		$cartItem = new app\models\Cart();
		$cartItem = $cartItem->get($_SESSION['user_id'], $product_id);
		$cartItem->delete();
		$this->view('cart/index');
	}
}