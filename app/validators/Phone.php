<?php
namespace app\validators;

#[\Attribute]
class Phone extends \app\core\Validator{
	public function isValidData($data){
		return preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $data);
	}
}