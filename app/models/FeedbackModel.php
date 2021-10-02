<?php

use Core\Helper;
use Core\Model;

class FeedbackModel extends Model
{
    function sendComment($name, $email, $message)
    {
        if (!Helper::checkEmail($email) || empty($name) || empty($message)) {
            return false;
        }
        $insert = "insert into feedback(name, email, message) values('$name', '$email', '$message')";
        return $this->insert($insert);
    }

    function getComments()
    {
        $select = "select * from feedback order by update_at desc, status desc";
        return $this->select($select);
    }

    function getComment($id)
    {
        $select = "select * from feedback where id=$id";
        return $this->select($select)[0];
    }
}
