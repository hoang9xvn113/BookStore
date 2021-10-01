<?php

use Core\Helper;
use Core\Model;

class CustomerModel extends Model
{
    function getCustomerList()
    {
        $select = "select * from customer, account where customer.id = customer_id";

        return $this->select($select);
    }

    function getCustomerbyId($id)
    {
        $select = "select * from customer, account 
                   where customer.id=$id and customer.id = customer_id";

        return $this->select($select)[0];
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
        $update = "update customer, account set 
                   name='$customerName',
                   sex=$customerSex,
                   phone='$customerPhone',
                   email='$customerEmail',
                   password='$customerPassword' where 
                   customer.id=$customerId and customer.id=customer_id";

        return $this->update($update);
    }
}
