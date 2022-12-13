<?php
namespace app\controllers;

class Wishlist extends \app\core\Controller{

	public function addToWishlist($product_id){
		$wishlist= new \app\models\Wishlist();
        if($wishlist->get($_SESSION['user_id'], $product_id)){
            header('location:/Product/index?Message=Item already in wishlist');
        }else{
            $wishlist->user_id = $_SESSION['user_id'];
            $wishlist->product_id = $product_id;
            $wishlist->insert();
            header('location:/Product/index?Message=Item added to wishlist');
        }
	}

	public function index(){
		$wishlist = new \app\models\Wishlist();
		$product = $wishlist->getWishlistProducts($_SESSION['user_id']);
		$this->view('Wishlist/index', ['product'=>$product]);
	}

	public function deleteFromWishlist($product_id){
		$wishlist = new \app\models\Wishlist();
		$wishlist = $wishlist->getByUser($_SESSION['user_id']);

		$wishlist = new \app\models\Wishlist();
		$wishlistEntry = $wishlist->get($_SESSION['user_id'], $product_id);
		$wishlistEntry->delete();
		$this->view('Wishlist/index', $wishlist);
	}
}