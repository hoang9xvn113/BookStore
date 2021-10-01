<?php

use Core\View;

class AdminController {
    public function index() {
        echo View::make('admin/index');
    }
}