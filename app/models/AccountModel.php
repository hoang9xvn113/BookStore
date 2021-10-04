<?php

use Core\Helper;
use Core\Model;

class AccountModel extends Model
{
    function checkLogin($user, $password)
    {
        $select = "select * from account where user='$user' and password='$password'";
        return $this->select($select)[0];
    }

    function checkAdminLogin($user, $password)
    {
        $status = $this->checkLogin($user, $password);
        if ($status) {
            return $status['permission'] == 1 ? $status : false;
        }
        return false;
    }

    function addAccount(
        $name,
        $sex,
        $phone,
        $email,
        $user,
        $password
    ) {
        if (!Helper::checkPhone($phone) ||
        !Helper::checkEmail($email) ||
        empty($name) || $sex === "" || empty($password))
        return false;
        $insert_account = "insert into account(user,password) values('$user', '$password')";
        $status = $this->insert($insert_account); 
        if ($status) {
            $id = $this->select("SELECT * from account order by id desc")[0]['id'];
            $insert_customer = "insert into customer(name, sex, phone, email, account_id) 
            values('$name', $sex, '$phone', '$email', $id)";
            return $this->insert($insert_customer);
        }

    }
}
