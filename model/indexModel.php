<?php

class indexModel extends Model{

	public function __construct() {        
        parent::__construct();     
        
    }
    public function getUsers(){
    	$sql = 'select * from users';
    	return $this->selectDB($sql);
    }

}