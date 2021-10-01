<?php

namespace Core\Exception;

use Exception;

class ViewNotFoundException extends Exception
{
    protected $message = "Không tìm thấy trang ";
}
