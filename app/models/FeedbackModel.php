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

    function deleteComment($id) {
        if ($id === "") {
            return false;
        }
        $delete = "delete from feedback where id = $id";
        return $this->delete($delete);
    }

    function reply($id, $message) {
        if ($id === "") return false;
        $update = "update feedback set status = 1, reply='$message' where id=$id";
        return $this->update($update);
    }
}
