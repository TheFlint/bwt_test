<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 20.08.2018
 * Time: 14:03
 */

Class Controller_Comments Extends Controller_Base
{

    function index()
    {
        $this->registry['template']->connectComponent('head', null, 'Comments', '/css/main.css');
        $this->registry['template']->connectComponent
        (
            'header',
            $this->menuElements,
            'Home'
        );
        $this->registry['template']->show('commentsTemplate');
        $this->registry['template']->connectComponent('footer');
    }


}
