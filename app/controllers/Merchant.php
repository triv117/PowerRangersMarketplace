<?php
namespace app\controllers;

class Merchant extends \app\core\Controller{
	public function index(){
		$this->view('Merchant/index');
	}

	public function register(){
		if(isset($_POST['action'])){
			
			$merchant = new \app\models\Merchant();

			if($merchant->getByName($_POST['merchant_name'])){
				header('location:/Merchant/register?error=The Merchant name: "'.$_POST['username'].'" is already in use.');
			}else{
				$merchant->user_id = $_SESSION["user_id"];
				$merchant->merchant_name = $_POST['merchant_name'];
				$merchant->merchant_fname = $_POST['merchant_fname'];
				$merchant->merchant_email = $_POST['merchant_email'];
				$merchant->merchant_phone = $_POST['merchant_phone'];
				$merchant->merchant_address = $_POST['merchant_address'];
				$merchant->merchant_city = $_POST['merchant_city'];
				$merchant->merchant_country = $_POST['merchant_country'];
				$merchant->merchant_region = $_POST['merchant_region'];
				$merchant->merchant_zip = $_POST['merchant_zip'];
				$merchant->insert();
				header('location:/Merchant/index');
			}
		}
		else{
			$this->view('Merchant/register');
		}
	}

	public function changeAdmin(){
		if(isset($_POST['action'])){
			$user = new \app\models\User();
			$user = $user->get($_SESSION['user_username']);
			if(password_verify($_POST['user_password'],$user->user_password_hash)){
				$newUser = new \app\models\User();
				if($newUser = $newUser->get($_POST['user_username'])){
					$merchant = new \app\models\Merchant();
					$merchant = $merchant->get($_SESSION['merchant_id']);
					$merchant->user_id = $newUser->user_id;
					$merchant->updateAdmin();
					header('location:/User/account?message=Merchant ownership transfered.');
				}else{
					header('location:/Merchant/changeAdmin?error=Account does not exist. Ownership transfer cancelled.');	
				}
			}else{
				header('location:/Merchant/changeAdmin?error=Wrong password provided. Ownership transfer cancelled.');
			}

		}else
			$this->view('Merchant/changeAdmin');
	}
	
	public function edit(){
		$merchant = new \app\models\Merchant();
		$merchant = $merchant->get($_SESSION['merchant_id']);

		if(isset($_POST['action'])){
			$merchant->merchant_name = $_POST['merchant_name'];
			$merchant->merchant_email = $_POST['merchant_email'];
			$merchant->merchant_phone = $_POST['merchant_phone'];
			$merchant->merchant_address = $_POST['merchant_address'];
			$merchant->merchant_city = $_POST['merchant_city'];
			$merchant->merchant_country = $_POST['merchant_country'];
			$merchant->merchant_region = $_POST['merchant_region'];
			$merchant->merchant_zip = $_POST['merchant_zip'];
			$merchant->update();
			header('location:/Merchant/index');
		}
		else{
			$this->view('Merchant/edit');
		}
	}
}