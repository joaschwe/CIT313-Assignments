<?php
class controller {

    public $load;
    public $user;


    function __construct() {
        $this->load = new load();
        $this->user = new user();
        $this->home();
    }

    function home() {
        $this->user->userID = 'joaschwe';
        $this->user->firstname = 'Joanna';
        $this->user->lastname = 'Schweiger';
        $this->user->email = 'joaschwe@iupui.edu';
        $this->user->role = 'admin';


        $data = $this->user->getName();
        $this->load->view('view.php',$data);
    }
}