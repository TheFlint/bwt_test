<?php

error_reporting(E_ALL);
if (version_compare(phpversion(), '5.1.0', '<') == true) {
    die ('PHP5.1 Only');
}
// Константы:
define('DIRSEP', DIRECTORY_SEPARATOR);
// Узнаём путь до файлов сайта
$site_path = realpath(dirname(__FILE__) . DIRSEP . '..' . DIRSEP) . DIRSEP;
define('site_path', $site_path);
require '../includes/startup.php';
//Не забыть испраить mysql:host, dbname, username, password
$db = new PDO('mysql:host=192.168.1.105;dbname=bwttestbase', 'root', '');


$registry->set ('db', $db);

$template = new Template($registry);

$registry->set ('template', $template);

$router = new Router($registry);

$registry->set ('router', $router);

$router->setPath (site_path . 'controllers');

$router->delegate();
