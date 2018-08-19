<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 18.08.2018
 * Time: 20:21
 */

Class Controller_Index Extends Controller_Base {

    function index() {
        $this->registry['template']->connectComponent('head',null,'Home','/css/main.css');
        $this->registry['template']->connectComponent('header', $menuElement = array('home','regpage','page') );
        $this->registry['template']->show('indexTemplate');
        $this->registry['template']->connectComponent('footer');
    }

}