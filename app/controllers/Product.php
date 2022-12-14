<?php
namespace app\controllers;

class Product extends \app\core\Controller{
	public function index(){
		$product = new \app\models\Product();
		$product = $product->getAll();
		$this->view('Product/index' , ['product'=>$product]);
	}

	public function addProduct(){
		if(isset($_POST['action'])){
			$product = new \app\models\Product();

			$product->merchant_id = $_SESSION["merchant_id"];
			$product->product_name = $_POST['product_name'];
			$product->product_description = $_POST['product_description'];
			$product->product_units = $_POST['product_units'];
			$product->product_price = $_POST['product_price'];
			$product->product_manufacturer = $_POST['product_manufacturer'];
			$product->product_rating = 0;
			$product->product_category = $_POST['product_category'];
			$product->insert();

			$product = $product->getByMerchant($_SESSION['merchant_id']);

			$this->view('Merchant/index', ['product'=>$product]);
		}else{
			$this->view('Product/addProduct');
		}
	}

	public function removeProduct($product_id){
			$product = new \app\models\Product();
			$product = $product->get($product_id);
			$product->delete();

			header('location:/Merchant/index?message=Item removed from catalogue.');
		
	}

	public function editProduct($product_id){
		$product = new \app\models\Product();
		$product = $product->get($product_id);
		if(isset($_POST['action'])){
			
			$product->product_name = $_POST['product_name'];
			$product->product_description = $_POST['product_description'];
			$product->product_units = $_POST['product_units'];
			$product->product_price = $_POST['product_price'];
			$product->product_manufacturer = $_POST['product_manufacturer'];
			$product->product_category = $_POST['product_category'];
			$product->update();

			header('location:/Merchant/index?message=Item updated.');
		}else{
			$this->view('Product/editProduct', $product);
		}
	}

	public function details($product_id){
		$product = new \app\models\Product();
		$product = $product->get($product_id);
		$this->view('Product/details', $product);
	}

	public function viewMerchant($merchant_id){
		$merchant = new \app\models\Merchant();
		$merchant = $merchant->get($merchant_id);

		$product = new \app\models\Product();
		$products = $product->getByMerchant($merchant_id);
		$this->view('Product/merchant' . $merchant->merchant_id);
	}
}