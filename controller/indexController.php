<?php
class indexController extends Controller{

	private $_model;
	public function __construct() {        
        parent::__construct();     
        $this->_model = $this->loadModel('indexModel');
    }
	
	public function index(){
		$this->_view->titulo = 'Pagina principal';
		$this->_view->users = $this->_model->getUsers();
		$this->_view->render();
	}
}