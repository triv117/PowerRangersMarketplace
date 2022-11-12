<?php
namespace app\models;

class Merchant extends \app\core\Model{

	#[\app\validators\NonEmpty]
	#[\app\validators\Email]
	public $merchant_email;
	#[\app\validators\NonEmpty]
	#[\app\validators\Phone]
	public $merchant_phone
	#[\app\validators\NonEmpty]
	public $merchant_address;
	#[\app\validators\NonEmpty]
	public $merchant_city
	#[\app\validators\NonEmpty]
	#[\app\validators\Country]
	public $merchant_country;
	#[\app\validators\NonEmpty]
	public $merchant_region
	#[\app\validators\NonEmpty]
	public $merchant_zip;

	public function get($merchant_id){
		$SQL = "SELECT * FROM merchant WHERE merchant_id=:merchant_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['merchant_id'=>$merchant_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Merchant');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO merchant(user_id, merchant_name, merchant_email, merchant_phone, merchant_address, merchant_city, merchant_country, merchant_region, merchant_zip) VALUES (:user_id, :merchant_name, :merchant_email, :merchant_phone, :merchant_address, :merchant_city, :merchant_country, :merchant_region, :merchant_zip)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'merchant_name'=>$this->merchant_lname,
						'merchant_email'=>$this->merchant_email,
						'merchant_phone'=>$this->merchant_phone,
						'merchant_address'=>$this->merchant_address,
						'merchant_city'=>$this->merchant_city,
						'merchant_country'=>$this->merchant_country,
						'merchant_region'=>$this->merchant_region,
						'merchant_zip'=>$this->merchant_zip]);
	}

	public function update(){
		$SQL = "UPDATE merchant SET merchant_email=:merchant_email, merchant_phone=:merchant_phone, merchant_address=:merchant_address, merchant_city=:merchant_city, merchant_country=:merchant_country, merchant_region=:merchant_regionm merchant_zip=:merchant_zip WHERE merchant_id=:merchant_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['merchant_email'=>$this->merchant_email,
						'merchant_phone'=>$this->merchant_phone,
						'merchant_address'=>$this->merchant_address,
						'merchant_city'=>$this->merchant_city,
						'merchant_country'=>$this->merchant_country,
						'merchant_region'=>$this->merchant_region,
						'merchant_zip'=>$this->merchant_zip,
						'merchant_id'=>$this->merchant_id]);
	}

	public function updateAdmin(){
		$SQL = "UPDATE merchant SET user_id:user_id WHERE merchant_id=:merchant_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'merchant_id'=>$this->merchant_id]);
	}
}