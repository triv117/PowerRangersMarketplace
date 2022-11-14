<?php

namespace app\models;

class Product extends \app\core\Model{

	public function getAll(){
        $SQL = "SELECT * FROM product";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }


	public function get($product_id){
		$SQL = "SELECT * FROM product WHERE product_id = :product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}

	public function getByMerchant($merchant_id){
        $SQL = "SELECT * FROM product WHERE product_category = :merchant_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['merchant_id'=>$merchant_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }

	public function insert(){
		$SQL = "INSERT INTO product(product_name, product_description, product_units, product_price,product_manufacturer, product_category) VALUES (:product_name, :product_description, :product_units, :product_price, :product_manufacturer, :product_category)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_name'=>$this->product_name,
						'product_description'=>$this->product_description,
						'product_units'=>$this->product_units,
						'product_price'=>$this->product_price,
						'product_manufacturer'=>$this->product_manufacturer,
						'product_category'=>$this->product_category]);
	}

	public function update(){
		$SQL = "UPDATE product SET product_name=:product_name, product_description=:product_description, product_units=:product_units, product_price=:product_price, product_manufacturer=:product_manufacturer, product_category=:product_category WHERE product_id=:product_id"
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_name'=>$this->product_name,
						'product_description'=>$this->product_description,
						'product_units'=>$this->product_units,
						'product_price'=>$this->product_price,
						'product_manufacturer'=>$this->product_manufacturer,
						'product_category'=>$this->product_category,
						'product_id'=>$this->product_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM product WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$this->product_id]);
	}
}