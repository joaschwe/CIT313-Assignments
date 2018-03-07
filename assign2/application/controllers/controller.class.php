<?php
/**
 * Created by PhpStorm.
 * User: joanna_schweiger
 * Date: 2/25/18
 * Time: 7:11 PM
 */

class controller {
    public $load;
    public $user;

    function home() {
        $this->user->userID = 'joaschwe';
        $this->user->firstname = 'Joanna';
        $this->user->lastname = 'Schweiger';
        $this->user->email = 'joaschwe@iupui.edu';
        $this->user->role = 'admin';

        $data = $this->user->getName();
        $this->load->view('view.php',$data);
    }

    function __construct() {
        $this -> load = new load();
        $this -> user = new user();
        $this -> home();
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __destruct() { }


}