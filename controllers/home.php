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
        session_set_cookie_params(3600);
        session_start();
        if (isset($_SESSION['userid'])) {
            $this->loadpage('weather');
        } else {
            $this->loadpage('loginin');
        }
        $this->registry['template']->connectComponent('footer');
    }


    function registration()
    {
        if (isset($_POST["registration"])) {
            if (isset($_POST['g-recaptcha-response'])) {
                $url_to_google_api = "https://www.google.com/recaptcha/api/siteverify";
                $secret_key = '6Lf58moUAAAAAEwdzk03o804zIpl6-S3isMF_EA7';
                $query = $url_to_google_api . '?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
                $data = json_decode(file_get_contents($query));

                if ($data->success) {
                    $login = new Base();
                    $login->send($allowed = array('name', 'email', 'password', 'sex', 'birthdate'), 'user', '/');

                } else {
                    echo('Вы не прошли валидацию reCaptcha');
                }

            }
        } else {
            echo('Вы не прошли валидацию reCaptcha2');
        }

    }

    function login()
    {
        if (isset($_POST["authorize"])) {
            if (isset($_POST['g-recaptcha-response'])) {
                $url_to_google_api = "https://www.google.com/recaptcha/api/siteverify";
                $secret_key = '6Lf58moUAAAAAEwdzk03o804zIpl6-S3isMF_EA7';
                $query = $url_to_google_api . '?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
                $data = json_decode(file_get_contents($query));

                if ($data->success) {
                    $authorize = new Base();
                    $authorize->authorize();
                } else {
                    echo('Вы не прошли валидацию reCaptcha');
                }
            }
        } else {
            echo('Вы не прошли валидацию reCaptcha2');
        }
    }

    private function loadpage($component)
    {
        $this->registry['template']->connectComponent('head', null, 'Home', '/css/main.css');
        $this->registry['template']->connectComponent
        (
            'header',
            $this->menuElements,
            'Home'
        );
        $this->registry['template']->show('homeTemplate');
        $this->registry['template']->connectComponent($component);
    }
}