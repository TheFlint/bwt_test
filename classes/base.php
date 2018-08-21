<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 19.08.2018
 * Time: 23:38
 */

class Base
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=192.168.1.105;dbname=bwttestbase', 'root', '');
    }

    private function set($allowed, &$values, $source = array())
    {
        $set = '';
        $values = array();
        if (!$source) $source = &$_POST;
        foreach ($allowed as $field) {
            if (isset($source[$field])) {
                $source[$field] = trim($source[$field]);
                $source[$field] = stripslashes($source[$field]);
                $source[$field] = strip_tags($source[$field]);
                $source[$field] = htmlspecialchars($source[$field]);
                $source[$field] = addslashes($source[$field]);
                if ($field == "email") {
                    $sql = "SELECT `email` FROM user WHERE `email`=\"{$source[$field]}\"";
                    $query = $this->db->query($sql) or die("failed!");
                    if (($result = $query->fetch(PDO::FETCH_ASSOC)) > 0) die('<a href="/">This email already registered!</a>');
                }
                if ($field == "password") $source[$field] = md5($source[$field]);
                $set .= "`" . str_replace("`", "``", $field) . "`" . "=\"$source[$field]\", ";
                $values[$field] = $source[$field];
            }
        }
        return substr($set, 0, -2);
    }

    public function send($allowed, $table, $location)
    {
        $sql = "INSERT INTO {$table} SET " . $this->set($allowed, $values);
        $stm = $this->db->prepare($sql);
        $stm->execute($values) or die('error');
        header("Location: {$location}");
    }

    public function authorize()
    {
        $email = $_POST['authorize_email'];
        $password = md5($_POST['authorize_password']);
        $sql = "SELECT `id`,`email`,`password` FROM `user` WHERE `email`=\"{$email}\" AND `password`= \"{$password}\"";;
        $query = $this->db->query($sql) or die("failed!");
        $data = $query->fetch(PDO::FETCH_ASSOC);
        if ($data == false) die('<a href="/">This combination of e-mail and password was\'n found</a>');
        session_set_cookie_params(3600);
        session_start();
        $_SESSION['userid'] = $data['id'];
        header('Location: /');
    }

    public function selectComments()
    {
        $sql = "SELECT * FROM comments ORDER BY id";
        $query = $this->db->query($sql) or die("failed!");
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            echo
            "
            <div class=\"comment\">
                 <div class=\"name\"><span>Name: </span>{$result["name"]}</div>
                 <div class=\"email\"><span>E-mail: </span>{$result["email"]}</div>
                 <div class=\"comment-text\">{$result["text"]}</div>
            </div>";
        }
    }
}


