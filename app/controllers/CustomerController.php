<?php

use Core\View;

class CustomerController
{

    public $customerModel;

    function __construct() {
        $this->customerModel = new CustomerModel;
    }

    function index() {
        $customerList = $this->customerModel->getCustomerList();
        echo View::make("admin/customer/customer-management", ['customers'=>$customerList]);
    }

    function editCustomer($request) {
        if (isset($request['id'])) {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $status = $this->customerModel->updateCustomer(
                    $request['id'],
                    $request['customerName'],
                    $request['customerSex'],
                    $request['customerPhone'],
                    $request['customerEmail'],
                    $request['customerPassword']
                );
            }
            $customer = $this->customerModel->getCustomerbyId($request['id']);
            if ($customer) {
                echo View::make("admin/customer/edit-customer", ['customer'=>$customer, 'status'=>$status ?? null]);
                return;
            }
        } 

        header("Location: /admin/quan-ly-khach-hang");
    }

    function signUp($request) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $status = $this->customerModel->addCustomer(
                $request['name'],
                $request['sex'],
                $request['phone'],
                $request['email'],
                $request['user'],
                $request['password']
            );
        }
        echo View::make('/account/sign-up', ['status'=>$status ?? null]);
    }

    function login() {
        echo View::make('account/login');
    }

}
