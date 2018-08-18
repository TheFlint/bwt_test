<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 18.08.2018
 * Time: 17:04
 */
spl_autoload_register(function($class_name) {

    $filename = strtolower($class_name) . '.php';

    $file = site_path . 'classes' . DIRSEP . $filename;


    if (file_exists($file) == false) {

        return false;

    }


    include ($file);

});
$registry = new Registry;
