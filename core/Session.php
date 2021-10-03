<?php

namespace Core;

class Session
{
    function __construct()
    {
        
    }

    static function sessionStart() {
        session_start();
    }

    static function removeAllVari() {
        session_unset();
    }

    static function destroySession() {
        session_destroy();
    }

    static function setSession($name, $value) {
        $_SESSION[$name] = $value;
    }

    static function getSession($name) {
        return $_SESSION[$name];
    }

    static function checkLogin($loginUrl) {
        $redirect = $loginUrl;
        if (Session::getSession("account_id") == null) {
            header("Location: $redirect");
        }
    }

    static function checkAdminLogin() {
        Session::checkLogin("/admin/dang-nhap");
    }

    static function checkClientLogin() {
        Session::checkLogin("/tai-khoan/dang-nhap");
    }


}
