<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 18.08.2018
 * Time: 20:21
 */

Class Controller_LogOut Extends Controller_Base
{
    function index()
    {
     session_start();
     session_destroy();
     header('Location: /');
    }

}