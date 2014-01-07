<?php 

class Launching{

	private $controller;
	private $method;

	public function __construct($url){

		$this->contoller((isset($url['c']))?$url['c']:'');
		unset($url['c']); 
		$this->method((isset($url['m']))?$url['m']:'');	
		unset($url['m']);
		$this->runController($url);
		   
	}

	private function contoller($controllerName = false){

		$controllerName = ($controllerName)?$controllerName:'index';
		$controllerRoute = ROOT.'controller'.DS.$controllerName.'Controller.php';
		if (is_readable($controllerRoute)) {
		 	include $controllerRoute;
		 	$this->controller = $controllerName.'controller';
		} else {
		 	throw new Exception('error 404');
		}
	}

	private function method($method){

		$this->method = (is_callable(array($this->controller, $method)))?$method:'index';		            
		
	}

	private function runController($args){
		if (!empty($args)) {
            call_user_func_array(array($this->controller, $this->method), $args); 
        } else {            
            call_user_func(array($this->controller, $this->method));
        }
	}


}