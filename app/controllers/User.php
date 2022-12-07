<?php
namespace app\controllers;

class User extends \app\core\Controller{
	public function index(){
		if(isset($_POST['action'])){
			$user = new \app\models\User();
			$user = $user->get($_POST['user_username']);
			if(password_verify($_POST['user_password'], $user->user_password_hash)){
				$_SESSION['user_username'] = $user->user_username;
				$_SESSION['user_id'] = $user->user_id;
				$merchant = new \app\models\Merchant();
				if($merchant->getByUser($_SESSION['user_id'])){
					$_SESSION['merchant_id'] = $merchant->merchant_id;
					$this->view('Merchant/index');
				}else{
					$this->view('User/account');
				}
			}else{
				header('location:/User/index?error=Incorrect username or password combination!');
			}
		}else{
			$this->view('User/index');
		}
	}

	public function register(){
		if(isset($_POST['action'])){
			if($_POST['user_password'] == $_POST['user_password_confirmation']){
				$user = new \app\models\User();
				if($user->get($_POST['user_username'])){
					header('location:/User/register?error=The username: "'.$_POST['username'].'" is already in use.');
				}else{
					$user->user_username = $_POST['user_username'];
					$user->user_password_hash = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
					$user->user_fname = $_POST['user_fname'];
					$user->user_lname = $_POST['user_lname'];
					$user->user_email = $_POST['user_email'];
					$user->user_phone = $_POST['user_phone'];
					$user->user_address = $_POST['user_address'];
					$user->user_city = $_POST['user_city'];
					$user->user_country = $_POST['user_country'];
					$user->user_region = $_POST['user_region'];
					$user->user_zip = $_POST['user_zip'];

					$user->insert();
					header('location:/User/index');
				}
			}
		}else{
			$this->view('User/register');
		}
	}

	public function resetPassword(){
		if(isset($_POST['action'])){
			$user = new \app\models\User();
			$user = $user->get($_SESSION['user_username']);
			if(password_verify($_POST['old_password'],$user->user_password_hash)){
				if($_POST['new_password'] == $_POST['new_password_confirm']){
					$user->user_password_hash = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
					$user->updatePassword();
					header('location:/User/account' . $user->user_username . '?message=Password modified.');

				}else{
					header('location:/User/account?error=New passwords don\'t match. Password unchanged.');	
				}
			}else{
				header('location:/User/account?error=Wrong password provided. Password unchanged.');
			}

		}else
			$this->view('User/account/resetPassword');
	}

	public function edit($user_id = null){
		$user_id = $_SESSION['user_id'];
		$user = new \app\models\User();
		$user = $user->get($_SESSION['user_username']);

		if(isset($_POST['action'])){

			$user->user_fname = $_POST['user_fname'];
			$user->user_lname = $_POST['user_lname'];
			$user->user_email = $_POST['user_email'];
			$user->user_phone = $_POST['user_phone'];
			$user->user_address = $_POST['user_address'];
			$user->user_city = $_POST['user_city'];
			$user->user_country = $_POST['user_country'];
			$user->user_region = $_POST['user_region'];
			$user->user_zip = $_POST['user_zip'];
			$user->user_id = $_SESSION['user_id'];

			$user->update();

			$this->view('User/account');
			
		}else{

			$this->view('User/edit');
		}
	}

	public function logout(){
		session_destroy();
		header('location:/User/index?message=You\'ve been successfully logged out.');
	}
}