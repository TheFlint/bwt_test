<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 18.08.2018
 * Time: 21:25
 */

Class Controller_FeedBack Extends Controller_Base
{

    function index()
    {
        $this->registry['template']->connectComponent('head', null, 'Feed Back', '/css/main.css');
        $this->registry['template']->connectComponent
        (
            'header',
            $this->menuElements,
            'Home'
        );
        $this->registry['template']->show('feedBackTemplate');
        $this->registry['template']->connectComponent('footer');
    }

    function sendComment()
    {
        $comment = new Comment();
        $comment->sendComment();
    }

}
