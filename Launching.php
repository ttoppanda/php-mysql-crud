<?php 

class Launching{

	private $_controller;
	private $_method;

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
		 	$this->_controller = $controllerName.'controller';
		} else {
		 	throw new Exception('error 404');
		}
	}

	private function method($method){

		$this->_method = (is_callable(array($this->_controller, $method)))?$method:'index';		            
		
	}

	private function runController($args){
		$this->_controller = new $this->_controller;
		if (!empty($args)) {
            call_user_func_array(array($this->_controller, $this->_method), $args); 
        } else {            
            call_user_func(array($this->_controller, $this->_method));
        }
	}


}