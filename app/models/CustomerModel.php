<?php

use Core\Helper;
use Core\Model;

class CustomerModel extends Model
{
    function getCustomerList()
    {
        $select = "select customer.id, name, sex, phone, email, user, password from customer,account where account_id=account.id order by update_at desc";
        return $this->select($select);
    }

    function getCustomerbyId($id)
    {
        $select = "select customer.id, name, sex, phone, email, user, password from customer, account
                   where customer.id=$id and account_id=account.id";

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
                   customer.id=$customerId and account_id = account.id";

        return $this->update($update);
    }

    function deleteCustomer($id) {
        if ($id === "") return false;
        $account_id = $this->select("select * from customer where id=$id")[0]['customer_id'];
        $delete_cusomter = "delete from customer where id=$id";
        $status = $this->delete($delete_cusomter);
        if ($status) {
            $delete_account = "delete from account where id=$account_id";
            return $this->delete($delete_account);
        }
        return false;
        
    }
}
