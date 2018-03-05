<?php
/**
 * Created by PhpStorm.
 * User: joanna_schweiger
 * Date: 2/25/18
 * Time: 7:11 PM
 */

class controller {
    public $load;
    public $model;

    function __construct() {
        $this -> load = new load();
        $this -> model = new model();
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
        $data = $this->model->getName();
        $this->load->view('view.php', $data);
    }
}