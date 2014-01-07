<?php

class View{	

	public function render($viewName = 'index'){
		$this->isReadable(ROOT.'view'.DS.'header.php');
		$this->isReadable(ROOT.'view'.DS.$viewName . '.php');
		$this->isReadable(ROOT.'view'.DS.'footer.php');

	}

	private function isReadable($fileName){
		if(is_readable($fileName)){
			include $fileName;
		}else {
			throw new Exception("Error al incluir vista " . $fileName, 1);			
		}
	}
}