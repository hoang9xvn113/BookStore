<?php

require_once "Config.php";
require_once "Model.php";
require_once MAIL_PATH . "Exception.php";
require_once MAIL_PATH . "PHPMailer.php";
require_once MAIL_PATH . "SMTP.php";


spl_autoload_register(function ($className) {
    $target_file = "$className.php";

    $patternController = "/Controller/i";
    $patternModel = "/Model/i";

    if (preg_match($patternController, $className)) {
        $target_file = CONTROLLERS_PATH . '/' . $target_file;
    }

    if (preg_match($patternModel, $className)) {
        $target_file = MODELS_PATH . '/' . $target_file;
    }

    if (file_exists($target_file)) {
        include_once $target_file;
    }
});