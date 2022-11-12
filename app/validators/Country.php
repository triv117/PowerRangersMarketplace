<?php
namespace app\validators;

#[\Attribute]
class Country extends \app\core\Validator{
	public function isValidData($data){
		return preg_match("/[^0-9]/", $data);
	}
}