<?php
/**
 * Created by PhpStorm.
 * User: joanna_schweiger
 * Date: 2/25/18
 * Time: 7:11 PM
 */


//abstract class model {
class user extends model {

    protected $userID;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $role;

//    public function getName() {
//        return array(
//            'userID'=>'joaschwe',
//            'first'=>'Joanna',
//            'last'=>'Schweiger',
//            'email'=>'joaschwe@iupui.edu',
//            'role'=>'admin'
//        );
//    }

    public function __construct() {
        parent::__construct();
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __destruct() { }

    public  function getName() {
        return array(
            'userID' => $this -> userID,
            'firstname' => $this -> firstname,
            'lastname' => $this -> lastname,
            'email' => $this -> email,
            'role' => $this -> role
        );
    }
}