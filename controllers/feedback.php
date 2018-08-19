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
            $menuElements = array
            (
                $menuElement1 = array('name' => 'Home', 'link' => '/'),
                $menuElement2 = array('link' => 'feedback', 'name' => 'Feed Back')
            ),
            'Home'
        );
        $this->registry['template']->show('feedBackTemplate');
        $this->registry['template']->connectComponent('footer');
    }

    function sendComment()
    {
        $db = new PDO('mysql:host=192.168.1.105;dbname=bwttestbase', 'root', '');
        $comment = new Comment();
        $comment->sendComment($db);

    }
}
