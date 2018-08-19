<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 18.08.2018
 * Time: 20:21
 */

Class Controller_Index Extends Controller_Base {

    function index() {
        $this->registry['template']->connectHeader('Home','/css/main.css');
        $this->registry['template']->show('indexTemplate');
    }

}