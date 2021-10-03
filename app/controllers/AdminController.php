<?php

use Core\View;

class AdminController {
    public function index() {
        echo View::make('admin/index');
    }

    function login($request) {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (
                $request['user'] == "admin" &&
                $request['password'] == "admin"
            ) $status = 1;
            else {
                $status = 0;
            }
            
            if ($status) {
                $_SESSION['account_id'] = $status;
                header("Location: /admin/dashboard");
            } else {

            }
        }
        echo View::make('admin/login', ['status'=>$status ?? null]);
    }
}