<?php

class ServiceController extends Controller
{
    public function sendFeedback()
    {
        $data = [
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'message' => Input::get('message'),
        ];
        
        Mail::send(
            'emails.user_feedback_report', 
            $data, 
            function ($message) {
                $message->from('console@minedreams.ru', 'console');
                $message->subject('вопрос с сайта от ') . date('Y-m-d H:i');
                $message->to('mini-dog@yandex.ru');
            }
        );
        
        Session::flash('user_feedback_report', '1');
    }
}
