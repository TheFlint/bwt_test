<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 19.08.2018
 * Time: 23:38
 */

class Comment
{
    private function setComment($allowed, &$values, $source = array())
    {
        $set = '';
        $values = array();
        if (!$source) $source = &$_POST;
        foreach ($allowed as $field) {
            if (isset($source[$field])) {
                $set .= "`" . str_replace("`", "``", $field) . "`" . "=\"$source[$field]\", ";
                $values[$field] = $source[$field];
            }
        }
        return substr($set, 0, -2);
    }

    public function sendComment($db)
    {
        $allowed = array("name", "email", "text");
        $sql = "INSERT INTO comments SET " . $this->setComment($allowed, $values);
        $stm = $db->prepare($sql);
        $stm->execute($values);
    }

}

