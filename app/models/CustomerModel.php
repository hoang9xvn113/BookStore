<?php

use Core\Helper;
use Core\Model;

class CustomerModel extends Model
{
    function getCustomerList()
    {
        $select = "select * from customer order by update_at desc";
        return $this->select($select);
    }

    function getCustomerbyId($id)
    {
        $select = "select * from customer 
                   where customer.id=$id";

        return $this->select($select)[0];
    }

    function checkLogin($user, $password) {
        $select = "select * from customer where user = '$user' and password='$password'";
        $param = $this->select($select);
        return $param == null ? [] : $param[0];
    }

    function addCustomer($name, $sex, $phone, $email, $user, $password)
    {
        if (!Helper::checkPhone($phone) ||
            !Helper::checkEmail($email) ||
            empty($name) || $sex === "" || empty($password))
            return false;
        $insert = "insert into customer(name, sex, phone, email, user, password) 
                   values('$name', $sex, '$phone', '$email', '$user', '$password')";
        return $this->insert($insert);
    }

    function updateCustomer(
        $customerId,
        $customerName,
        $customerSex,
        $customerPhone,
        $customerEmail,
        $customerPassword
    ) {
        if (
            empty($customerName) || empty($customerPassword) ||
            !Helper::checkEmail($customerEmail) ||
            !Helper::checkPhone($customerPhone) ||
            $customerId === "" || $customerSex === ""
        ) {
            return false;
        }
        $update = "update customer set 
                   name='$customerName',
                   sex=$customerSex,
                   phone='$customerPhone',
                   email='$customerEmail',
                   password='$customerPassword' where 
                   id=$customerId";

        return $this->update($update);
    }
}
