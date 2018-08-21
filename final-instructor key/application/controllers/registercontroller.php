<?php

class RegisterController extends Controller {
    
    protected $userObject;

    public function index () {
        $userObject = new Users();
        $this->set('task','add');
    }
    
    //add a user -registercontroller.php- register.php - registration_form.php
    public function add (){

        //retrieve the password from the form
        $password = $_POST['password'];
        
        //store the hashed password in variable
        $passhash = password_hash($password, PASSWORD_DEFAULT);
        
        //instantiate new user
        $this->userObject = new Users();
        
        //store form values in array
        $data = array(
            'first_name'=>$_POST['first_name'],
            'last_name'=>$_POST['last_name'],
            'email'=>$_POST['email'],
            'password'=>$passhash
                    );


            $this->userObject->addUser($data);
                
            $this->set('message', 'Thanks for Registering!');

    } //end add


} //end class

?>

