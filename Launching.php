<?php 

class Launching{

	public static function init($controllerName=false){
		$controllerName = ($controllerName)?$controllerName:'index';
		$controllerRoute = ROOT.'controller'.DS.$controllerName.'Controller.php';
		if (is_readable($controllerRoute)) {
		 	include $controllerRoute;
		} else {
		 	throw new Exception('error 404');
		}
		  
	}
}