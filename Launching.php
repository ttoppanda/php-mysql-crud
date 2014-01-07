<?php 

class Launching{

	
	public function __construct($url){
		$this->contoller($url['c']);
		
		   
	}
	
	private function contoller($controllerName = false){
		$controllerName = ($controllerName)?$controllerName:'index';
		$controllerRoute = ROOT.'controller'.DS.$controllerName.'Controller.php';
		if (is_readable($controllerRoute)) {
		 	include $controllerRoute;
		} else {
		 	throw new Exception('error 404');
		}
	}
}