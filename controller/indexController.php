<?php

class indexController extends Controller {

    private $_model;

    public function __construct() {
        parent::__construct();
        $this->_model = $this->loadModel('indexModel');
    }

    public function index() {
        $this->_view->titulo = 'Pagina principal';
        $this->_view->users = $this->_model->getUsers();
        $this->_view->render();
    }

    public function actualizar() {
        if (!empty($_POST)) {
            $this->_model->updateUser($_POST);
            $arrayMsj['success'] = TRUE;
            echo (json_encode($arrayMsj));
            exit;
        }
        exit;
    }

}
