<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 18.08.2018
 * Time: 20:18
 */

Abstract Class Controller_Base{

        protected $registry;

        function __construct($registry) {

                $this->registry = $registry;
        }

        abstract function index();
}

