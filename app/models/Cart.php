<?php
namespace app\models;

class Cart extends \app\core\Model{

	public function getByUser($user_id){
        $SQL = "SELECT * FROM cart WHERE user_id = :user_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id'=>$user_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
        return $STMT->fetchAll();
    }

    public function insert(){
		$SQL = "INSERT INTO cart(user_id, product_id, product_count) VALUES (:user_id, :product_id, :product_count)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'product_id'=>$this->product_id,
						'product_count'=>$this->product_count]);
	}

	public function update(){
		$SQL = "ON DUPLICATE KEY UPDATE product_count = product_count + 1;"; 
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
		$SQL = "DELETE FROM cart WHERE product_id=:product_id AND user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$this->product_id,
						'user_id'=>$this->user_id]);
	}

	public function get($user_id, $product_id){
        $SQL = "SELECT * FROM cart WHERE user_id = :user_id AND product_id = :product_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id'=>$user_id,
                        'product_id'=>$product_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
        return $STMT->fetch();
    }

    public function updateCount(){
        $SQL = "UPDATE cart SET product_count=:product_count+1 WHERE user_id=:user_id AND product_id=:product_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['product_count'=>$this->product_count,
                        'user_id'=>$this->user_id,
                        'product_id'=>$this->product_id]);
    }

    public function getCartProducts($user_id){
        $SQL = "SELECT product.*  FROM product, cart WHERE cart.product_id = product.product_id AND cart.user_id = :user_id;";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id'=>$user_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }
}