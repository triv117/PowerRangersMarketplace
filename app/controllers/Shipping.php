 <?php
namespace app\controllers;

class Shipping extends \app\core\Controller{
	public function index(){
		if($_SESSION['merchant_id']){
			$merchant = new \app\models\Merchant();
			$merchant = $merchant->get($_SESSION['merchant_id']);
			$order = new \app\models\Shipping();
			$orders = $order->getByMerchant($merchant_id);
			$this->view('Shipping/index',['merchant'=>$merchant, 'orders'=>$orders]);
		}else{
			$user = new \app\models\User();
			$user = $user->get($_SESSION['user_id']);
			$order = new \app\models\Shipping();
			$orders = $order->getByMerchant($merchant_id);
			$this->view('Shipping/index',['user'=>$user, 'orders'=>$orders]);
		}
		$this->view('Shipping/index')
	}

	public function viewOrder($shipping_id){
		$shipping = new \app\models\Shipping();
		$shipping = $shipping->get($shipping_id);
		$transaction = \app\models\Transaction();
		$transactions = $transaction->getByShipping($shipping_id);
		$this->view('Shipping/viewOrder',['shipping'=>$shipping, 'transactions'=>$transactions])
	}

	public function updateOrder($shipping_id){
		$shipping = new \app\models\Shipping();
		$shipping = $shipping->get($shipping_id);

		if(isset($_POST['action'])){

			$shipping->shipping_arrival_date = $_POST['shipping_arrival_date'];
			$shipping->shipping_status = $_POST['shipping_status'];

			$shipping->update();

			header('location:/Shipping/index'//HEADER TO BE COMPLETED);

		}else{

			$this->view('Shipping/updateOrder'//VIEW TO BE COMPLETED);
		}
	}
}