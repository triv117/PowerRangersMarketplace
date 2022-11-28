<?php
namespace app\models;

class Wishlist extends \app\core\Model{

	public function getByUser($user_id){
        $SQL = "SELECT * FROM wishlist WHERE user_id = :user_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id'=>$user_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Wishlist');
        return $STMT->fetchAll();
    }

    public function insert(){
		$SQL = "INSERT INTO wishlist(user_id, product_id) VALUES (:user_id, :product_id)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'product_id'=>$this->product_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM wishlist WHERE product_id=:product_id AND user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$this->product_id,
						'user_id'=>$this->user_id]);
	}
}