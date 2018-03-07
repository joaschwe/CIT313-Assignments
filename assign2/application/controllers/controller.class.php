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

    function __construct() {
        $this -> load = new load();
        $this -> user = new user();
        $this -> home();
    }

    function __get($name)
    {
        // TODO: Implement __get() method.
    }

    function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }

    function home() {
        $this -> user -> userID = 'joaschwe';
        $this -> firstname -> firstname = 'joanna';
        $this -> lastname -> lastname = 'schweiger';
        $this -> email -> email = 'joaschwe@iupui.edu';
        $this -> role -> role = 'admin';

        $data = $this->user->getName();
        $this->load->view('view.php', $data);
    }
}