<?php
/**
 * Created by PhpStorm.
 * User: joanna_schweiger
 * Date: 2/4/18
 * Time: 9:11 PM
 */


/** INSTRUCTIONS
 * Magic Methods:
__construct
__set
__get
__destruct

 * Constructor method should...
accept one parameter:  user_level
set the user_level variable

 * Properties (type: 'Protected'):
user_id
user_type
first_name
last_name
email_address
user_level
 */

/** CREATE SUBCLASSES
Now create two more classes--RegisteredUser & Admin--, each in their own files, which are subclasses of the User class.
A registered user is of user_type 1.
An admin user is of user type 2
 *
 * The constructor method of the classes should...
 * accept two parameters:  user_level and user_id
 * set the default value of each class.

Both classes should...
 * call their parent’s constructor method
 * set the user id in the constructor method
 */

class Users
{
    //only accessible directly via the class and subclasses
    protected $user_id;
    protected $user_type;
    protected $first_name;
    protected $last_name;
    protected $email_address;
    protected $user_level;

    public function __construct($user_level)
    {
        $this->user_level = $user_level;
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