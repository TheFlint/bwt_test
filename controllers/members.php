<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 18.08.2018
 * Time: 21:25
 */
Class Controller_Members Extends Controller_Base {

    function index() {
       $this->registry['template']->show('membersTemplate');
    }

//    function view() {
//
//        echo 'You are viewing the members/view request';
//
//    }

}
