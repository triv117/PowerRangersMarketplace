<?php
namespace app\controllers;

class User extends \app\core\Controller{

	public function addToCart($product_id){
		if(isset($_POST['action'])){
			$cart = new app\models\Cart();
			$cart = $cart->getByUser($_SESSION['user_id']);

			$cart->product_count = $_POST['product_count'];
			$cart->insert();
		}
	}
}