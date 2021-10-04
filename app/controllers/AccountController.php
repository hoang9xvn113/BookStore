<?php

use Core\View;

class AccountController {
    public $accountModel;

    function __construct()
    {
        $this->accountModel = new AccountModel;
    }

    function loginAdmin($request) {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $status = $this->accountModel->checkAdminLogin($request['user'], $request['password']);
            
            if ($status) {
                $_SESSION['account_id'] = $status['id'];
                header("Location: /admin/dashboard");
            } else {

            }
        }
        echo View::make('admin/login', ['status'=>$status ?? null]);
    }

    function login($request) {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $status = $this->accountModel->checkLogin($request['user'], $request['password']);
            if ($status) {
                $_SESSION['account_id'] = $status['id'];
                header("Location: /");
            } else {

            }
        }
        echo View::make('account/login', ['status'=>$status ?? null]);
    }

    function logout() {
        $_SESSION['account_id'] = null;
        header("Location: /");
    }

    function signUp($request) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $status = $this->accountModel->addAccount(
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

    
}