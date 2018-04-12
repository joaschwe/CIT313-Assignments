<?php
/**
 * Created by PhpStorm.
 * User: joanna_schweiger
 * Date: 3/30/18
 * Time: 12:08 AM
 */



setcookie(session_name(), "", time() - 3600); //send browser command remove sid from cookie
session_destroy(); //remove sid-login from server storage
session_write_close();
header('Location: ' . BASE_URL);

?>