<?php
/**
 * Created by PhpStorm.
 * User: joanna_schweiger
 * Date: 2/25/18
 * Time: 7:11 PM
 */

//if(file_exists('application/'.$class.'.class.php'))
//{
//    include_once('application/'.$class.'.class.php');
//
//}


function loadClass($class) {
    include_once 'controllers/controller.class.php';
    include_once 'load.class.php';
    include_once 'models/model.class.php';
    include_once 'models/user.class.php';
}

//include_once '../application/controllers/controller.class.php';
//include_once '../application/models/model.class.php';

//code here for file_exists()

spl_autoload_register('loadClass');

new controller();