<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 18.08.2018
 * Time: 20:18
 */

Abstract Class Controller_Base{

        protected $registry;
        public $menuElements;

        function __construct($registry) {

                $this->registry = $registry;
           $this->menuElements = array
            (
                $menuElement1 = array('name' => 'Home', 'link' => '/'),
                $menuElement2 = array('link' => '/feedback', 'name' => 'Feed Back'),
                $menuElement3 = array('name' => 'Comments', 'link' => '/comments'),
                $menuElement4 = array('name' => 'Log out', 'link' => '/logout')
            );
        }

        abstract function index();
}

