<?php
/**
 * Created by PhpStorm.
 * User: joanna_schweiger
 * Date: 2/4/18
 * Time: 9:39 PM
 */

/**INSTRUCTIONS
CREATE SUBCLASSES
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

class RegisteredUser extends Users {

    protected $user_type = "1";

    function __construct($user_level, $user_id)
    {
        parent::__construct($user_level);
        $this->user_id = $user_id;
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