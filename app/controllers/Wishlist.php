<?php
namespace app\controllers;

class User extends \app\core\Controller{

	public function addToWishlist($product_id){
		if(isset($_POST['action'])){
			$wishlist = new app\models\Wishlist();
			$wishlist = $wishlist->getByUser($_SESSION['user_id']);

			$product = new app\models\product();
			$product = $product->get($product_id);

			$wishlist->product_id = $product_id;
			$wishlist->insert();
			header('location:/Product/details',['product'->$product]);
		}else{
			$this->view('Product/details',['product'->$product]);
		}
	}

	public function index(){
		$wishlist = new app\models\Wishlist();
		$wishlist = $wishlist->getByUser($_SESSION['user_id']);
		$this->view('Wishlist/index',['wishlist'->$wishlist]);
	}

	public function deleteFromWishlist($product_id){
		$wishlist = new app\models\Wishlist();
		$wishlist = $wishlist->getByUser($_SESSION['user_id']);

		$wishlist = new app\models\Wishlist();
		$wishlistEntry = $wishlist->get($_SESSION['user_id'], $product_id);
		$wishlistEntry->delete();
		$this->view('Wishlist/index',['wishlist'->$wishlist]);
	}
}