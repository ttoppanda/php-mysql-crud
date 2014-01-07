<?php
class indexController extends Controller{

	public function __construct() {        
        parent::__construct();     
        
    }
	
	public function index(){
		$this->_view->titulo = 'Pagina principal';
		$this->_view->render();
	}
}