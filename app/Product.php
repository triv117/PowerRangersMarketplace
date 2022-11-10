<?php

namespace app\models;

class Product extends \app\core\Model{
	public function get($product_id){
		$SQL = "SELECT animal.*";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}
}