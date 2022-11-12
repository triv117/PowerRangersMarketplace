<?php
namespace app\models;

	#[\app\validators\NonEmpty]
	#[\app\validators\ArrivalDate]
	public $shipping_arrival_date;

class Shipping extends \app\core\Model{
	public function get($shipping_id){
		$SQL = "SELECT * FROM shipping WHERE shipping_id=:shipping_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['shipping_id'=>$shipping_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Shipping');
		return $STMT->fetch();
	}

	public function getByUser($user_id){
		$SQL = "SELECT * FROM shipping WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Shipping');
		return $STMT->fetchAll();
	}

	public function getByMerchant($merchant_id){
		$SQL = "SELECT * FROM shipping WHERE merchant_id=:merchant_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['merchant_id'=>$merchant_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Shipping');
		return $STMT->fetchAll();
	}

	public function getByStatusUser($shipping_status, $user_id){
		$SQL = "SELECT * FROM shipping WHERE shipping_status LIKE :shipping_status AND user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['shipping_status'=>$shipping_status, 'user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Shipping');
		return $STMT->fetchAll();
	}

	public function getByStatusMerchant($shipping_status, $merchant_id){
		$SQL = "SELECT * FROM shipping WHERE shipping_status LIKE :shipping_status AND merchant_id=:merchant_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['shipping_status'=>$shipping_status, 'merchant_id'=>$merchant_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Shipping');
		return $STMT->fetchAll();
	}

	public function insert(){
		$SQL = "INSERT INTO shipping(user_id, merchant_id, shippping_confirmation_date, shipping_arrival_date, shipping_status) VALUES (:user_id, :merchant_id, :shippping_confirmation_date, :shipping_arrival_date, :shipping_status)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'merchant_id'=>$this->merchant_id,
						'shipping_confirmation_date'=>$this->shipping_confirmation_date,
						'shipping_arrival_date'=>$this->shipping_arrival_date,
						'shipping_status'=>$this->shipping_status]);
	}

	public function update(){
		$SQL = "UPDATE shipping_status SET shipping_arrival_date=:shipping_arrival_date, shipping_status=:shipping_status WHERE shipping_id=:shipping_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['shipping_arrival_date'=>$this->shipping_arrival_date,
						'shipping_status'=>$this->shipping_status
						'shipping_id'=>$this->shipping_id]);
	}
}