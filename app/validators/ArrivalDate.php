<?php
namespace app\validators;

#[\Attribute]
class ArrivalDate extends \app\core\Validator{
	public function isValidData($data){
		$now = date_create();
		$then = date_create($data);
		return $then>$now;
	}
}