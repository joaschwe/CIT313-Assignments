<?php
/**
 * Created by PhpStorm.
 * User: joanna_schweiger
 * Date: 2/25/18
 * Time: 7:11 PM
 */

class load {
    function view($file_name, $data=null) {
        if (is_array($data)) {
            extract($data);
        }

        include 'views/' . $file_name;
    }
}