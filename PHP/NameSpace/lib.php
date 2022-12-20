<?php
// application library 1
namespace App\Lib;

const MYCONST = 'App\Lib\MYCONST';

function MyFunction() {
	return __FUNCTION__;
}

class MyClass1 {
	static function WhoAmI($data1) {
		return __METHOD__;
	}
}
?>