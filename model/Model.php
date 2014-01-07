<?php
class Model{

	protected $_conexion;

	public function __construct() {
	    $this->_conexion = Conexion::getInstance();
	}
	protected function selectDB($sql) {		
        return $this->_conexion->query($this->_conexion->run($sql));         
    }
}