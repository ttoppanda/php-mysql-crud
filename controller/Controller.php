<?php
abstract class Controller{

	protected $_view;

	public function __construct() {
		$this->_view = new View();
	}
	protected function loadModel($model){
		$this->isReadable(ROOT.'model'.DS.$model.'.php');
		return new $model;
	}
	private function isReadable($fileName){
		if(is_readable($fileName)){
			include $fileName;			
		}else {
			throw new Exception("Error al incluir modelo " . $fileName, 1);			
		}
	}

	abstract public function index();

}