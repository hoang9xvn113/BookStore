<?php

use Core\Helper;
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

    function reply($request) {
        if (isset($request['id'])) {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $status = Helper::sendEmail($request['email'], $request['message']);
                if ($status) {
                    $status = $this->feedbackModel->reply($request['id'], $request['message']);
                }
            }

            $comment = $this->feedbackModel->getComment($request['id']);
            if ($comment) {
                echo View::make("admin/feedback/reply-feedback", ['comment'=>$comment, "status"=>$status ?? null]);
                return;
            }
        } 

        header("Location: /admin/phan-hoi");

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

    function deleteComment($request) {
        if (isset($request['id'])) {
            $status = $this->feedbackModel->deleteComment($request['id']);
        }
        header("Location: /admin/phan-hoi");
    }


}