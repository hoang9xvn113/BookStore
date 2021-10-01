<?php

namespace Core\Exception;

use Error;
use Exception;

class RouteNotFoundException extends Exception {
    protected $message = "Không có đường dẫn đến trang";
}