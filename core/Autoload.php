<?php

require_once "Config.php";
require_once "Model.php";

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
        require_once $target_file;
    }
});