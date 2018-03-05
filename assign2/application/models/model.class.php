<?php
/**
 * Created by PhpStorm.
 * User: joanna_schweiger
 * Date: 2/25/18
 * Time: 7:11 PM
 */


//abstract class model {
class model {

    protected $userID = 'joaschwe';
    protected $firstname = 'Joanna';
    protected $lastname = 'Schweiger';
    protected $email = 'joaschwe@iupui.edu';
    protected $role = 'admin';

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
//        $this->userID = $user_ID;
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