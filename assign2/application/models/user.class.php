<?php
/**
 * Created by PhpStorm.
 * User: joanna_schweiger
 * Date: 2/25/18
 * Time: 10:31 PM
 */

class user extends model
{
    //only accessible directly via the class and subclasses
    protected $user_id;
    protected $user_type;
    protected $first_name;
    protected $last_name;
    protected $email_address;
    protected $user_level;


    public function __construct()
    {
        parent::__construct();
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

    public function getName() {
        return array(
            'userID'=>$this->userID,
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'email'=>$this->email,
            'role'=>$this->role
        );
    }
}