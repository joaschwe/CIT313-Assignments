<?php
/**
 * Created by PhpStorm.
 * User: joanna_schweiger
 * Date: 2/25/18
 * Time: 7:11 PM
 */



 abstract class model {

     protected $userID;
     protected $firstname;
     protected $lastname;
     protected $email;
     protected $role;


    public function __construct() {
        //coming back to this
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __destruct() { }
}