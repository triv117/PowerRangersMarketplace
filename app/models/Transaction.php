<?php
namespace app\models;

class Transaction extends \app\core\Model{
	public function get($shipping_id, $product_id){
		$SQL = "SELECT * FROM transaction WHERE shipping_id=:shipping_id AND product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['shipping_id'=>$shipping_id, 'product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Transaction');
		return $STMT->fetch();
	}

	public function getByShipping($shipping_id){
		$SQL = "SELECT * FROM transaction WHERE shipping_id=:shipping_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['shipping_id'=>$shipping_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Transaction');
		return $STMT->fetchAll();
	}

	public function insert(){
		$SQL = "INSERT INTO transaction(shipping_id, product_id, units_ordered) VALUES (:shipping_id, :product_id, :units_ordered)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['shipping_id'=>$this->shipping_id,
						'product_id'=>$this->product_id,
						'units_ordered'=>$this->units_ordered]);
	}
}