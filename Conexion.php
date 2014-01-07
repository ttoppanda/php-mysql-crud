<?php
class Conexion {

	static $_instance;
	private $_dataBase;
	private $_link;
	private $_password;
	private $_server;
	private $_user;

	private function __construct() {
		$this->setConexion;

	}

	public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    private function __clone(){}

    private function setDataConexion() {
        $this->_server = 'localhost';
        $this->_dataBase = 'crud';
        $this->_user = 'root';
        $this->_password = 'root';
    }
    private function conexion() {
        $this->link = mysqli_connect($this->_servidor, 
        	$this->_usuario, $this->_password, $this->_baseDatos);
	}
	private function run($sql) {
        return mysqli_query($this->link, $sql); 
    }
    public function query($sql){

    	while ($row = mysqli_fetch_array(run($sql), MYSQLI_ASSOC)) {
                $rows[] = $row;
            }
            if (empty($rows))
                return FALSE;
            return $rows;	
        }
    }
}