<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 18.08.2018
 * Time: 20:21
 */

Class Controller_Home Extends Controller_Base
{

    function index()
    {
        $this->registry['template']->connectComponent('head', null, 'Home', '/css/main.css');
        $this->registry['template']->connectComponent
        (
            'header',
            $this->menuElements,
            'Home'
        );
        $this->registry['template']->show('homeTemplate');
        $this->registry['template']->connectComponent('footer');
    }

}