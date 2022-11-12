<?php
namespace app\models;

class User extends \app\core\Model{

	#[\app\validators\NonEmpty]
	public $user_fname;
	#[\app\validators\NonEmpty]
	public $user_lname
	#[\app\validators\NonEmpty]
	#[\app\validators\Email]
	public $user_email;
	#[\app\validators\NonEmpty]
	#[\app\validators\Phone]
	public $user_phone
	#[\app\validators\NonEmpty]
	public $user_address;
	#[\app\validators\NonEmpty]
	public $user_city
	#[\app\validators\NonEmpty]
	#[\app\validators\Country]
	public $user_country;
	#[\app\validators\NonEmpty]
	public $user_region
	#[\app\validators\NonEmpty]
	public $user_zip;

	public function get($username){
			$SQL = "SELECT * FROM user WHERE username LIKE :username";
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['username'=>$username]);
			$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
			return $STMT->fetch();
		}

	public function insert(){
		$SQL = "INSERT INTO user(user_username, user_password_hash, user_fname, user_lname, user_email, user_phone, user_address, user_city, user_country, user_region, user_zip) VALUES (:user_username, :user_password_hash, :user_fname, :user_lname, :user_email, :user_phone, :user_address, :user_city, :user_country, :user_region, :user_zip)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_username'=>$this->user_username,
						'user_password_hash'=>$this->user_password_hash,
						'user_fname'=>$this->user_fname,
						'user_lname'=>$this->user_lname,
						'user_email'=>$this->user_email,
						'user_phone'=>$this->user_phone,
						'user_address'=>$this->user_address,
						'user_city'=>$this->user_city,
						'user_country'=>$this->user_country,
						'user_region'=>$this->user_region,
						'user_zip'=>$this->user_zip]);
	}

	public function update(){
		$SQL = "UPDATE user SET user_fname=:user_fname, user_lname=:user_lname, user_email=:user_email, user_phone=:user_phone, user_address=:user_address, user_city=:user_city, user_country=:user_country, user_region=:user_regionm user_zip=:user_zip WHERE user_id=user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_username'=>$this->user_username,
						'user_password_hash'=>$this->user_password_hash,
						'user_fname'=>$this->user_fname,
						'user_lname'=>$this->user_lname,
						'user_email'=>$this->user_email,
						'user_phone'=>$this->user_phone,
						'user_address'=>$this->user_address,
						'user_city'=>$this->user_city,
						'user_country'=>$this->user_country,
						'user_region'=>$this->user_region,
						'user_zip'=>$this->user_zip,
						'user_id'=>$this->user_id]);
	}

	public function updatePassword(){
		$SQL = "UPDATE user SET user_password_hash=:user_password_hash WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_password_hash'=>$this->user_password_hash,
					    'user_id'=>$this->user_id]);
	}
}