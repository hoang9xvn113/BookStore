<?php

use Core\View;

class FeedbackController {

    function index() {
        echo View::make("admin/feedback/feedback-management");
    }

    function reply() {
        echo View::make("admin/feedback/reply-feedback");
    }
}