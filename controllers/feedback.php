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
        session_set_cookie_params(300);
        session_start();
        if (isset($_SESSION['userid'])) {
            $this->registry['template']->connectComponent('head', null, 'Feed Back', '/css/main.css');
            $this->registry['template']->connectComponent
            (
                'header',
                $this->menuElements,
                'Home'
            );
            $this->registry['template']->show('feedBackTemplate');
            $this->registry['template']->connectComponent('footer');
        } else {
            header('Location: /');
        }

    }

    function sendComment()
    {
        $comment = new Base();
        $comment->send($allowed = array("name", "email", "text"),'comments','/feedback');
    }

}
