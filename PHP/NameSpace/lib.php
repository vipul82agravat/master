<?php
// application library 1
namespace App\Lib;

const MYCONST = 'App\Lib\MYCONST';

function MyFunction() {
	return __FUNCTION__;
}

class MyClass {
	static function WhoAmI($d) {
		return __METHOD__;
	}
}
?>