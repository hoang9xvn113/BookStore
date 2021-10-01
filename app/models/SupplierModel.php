<?php

use Core\Helper;
use Core\Model;

class SupplierModel extends Model
{
    function addSupplier(string $name, string $phone, string $email, string $address, int $status = 0)
    {
        if (
            empty($name) || empty($address) ||
            !Helper::checkEmail($email) ||
            !Helper::checkPhone($phone)
        ) {
            return false;
        }

        $insert = "insert into supplier(name,phone,email,address,status) 
                   values('$name', '$phone', '$email', '$address', $status)";
        return $this->insert($insert);
    }

    function getSupplierList()
    {
        $select = "select * from supplier";

        return $this->select($select);
    }

    function editSupplier($id, $name, $phone, $email, $address, $status = 0)
    {
        if (
            empty($id) || empty($name) || empty($address) ||
            !Helper::checkEmail($email) ||
            !Helper::checkPhone($phone)
        ) {
            return false;
        }

        $update = "update supplier set 
                   name='$name', phone='$phone',
                   email='$email', address='$address',
                   status=$status";
        
        return $this->update($update);
    }

    function getSupplierbyId($id)
    {
        $select = "select * from supplier where id=$id";
        return $this->select($select)[0] ?? [];
    }
}
