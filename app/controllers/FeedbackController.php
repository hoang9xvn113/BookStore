<?php

use Core\View;

class FeedbackController {

    public $feedbackModel;

    function __construct()
    {
        $this->feedbackModel = new FeedbackModel;
    }

    function index() {
        $comments = $this->feedbackModel->getComments();
        echo View::make("admin/feedback/feedback-management", ['comments'=> $comments]);
    }

    function reply() {
        echo View::make("admin/feedback/reply-feedback");
    }

    function contact($request) {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $status = $this->feedbackModel->sendComment(
                $request['name'],
                $request['email'],
                $request['message']
            );
        }
        echo View::make("feedback/contact", ['status'=>$status ?? null]);
    }
}