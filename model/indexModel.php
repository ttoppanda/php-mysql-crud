<?php

class indexModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getUsers() {
        $sql = 'select * from users';
        return $this->selectDB($sql);
    }

    public function updateUser($post) {
        $name = $post['nombre'];
        $email = $post['email'];
        $id = $post['id'];
        $sql = 'UPDATE users
                SET nombre="'. $name .'", email="'. $email .'"
                WHERE id='. $id;
        $this->selectDB($sql);
    }

}
