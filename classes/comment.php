<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 19.08.2018
 * Time: 23:38
 */

class Comment
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=192.168.1.105;dbname=bwttestbase', 'root', '');
    }

    private function setComment($allowed, &$values, $source = array())
    {
        $set = '';
        $values = array();
        if (!$source) $source = &$_POST;
        foreach ($allowed as $field) {
            if (isset($source[$field])) {
                $source[$field] = trim($source[$field]);
                $source[$field] = addslashes($source[$field]);
                $set .= "`" . str_replace("`", "``", $field) . "`" . "=\"$source[$field]\", ";
                $values[$field] = $source[$field];
            }
        }
        return substr($set, 0, -2);
    }

    public function sendComment()
    {
        $allowed = array("name", "email", "text");
        $sql = "INSERT INTO comments SET " . $this->setComment($allowed, $values);
//        var_dump($sql);
//        $query = $this->db->query($sql) or die("failed!");
        $stm = $this->db->prepare($sql);
        $stm->execute($values);
//        var_dump($query);
        header("Location: /feedback");
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

