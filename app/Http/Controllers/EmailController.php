<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send1()
    {
        $title = 'Welcome to the laracoding.com example email';
        $body = 'Thank you for participating!';

        $this->sentmail($title,$body);

        return "Email sent successfully!";

    }
    public function send2()
    {
        $title = 'Welcome to the laracoding.com example email';
        $body = 'Thank you for participating!';

        $this->sentmail($title,$body);

        return "Email sent successfully!";

    }
    public function send3()
    {
        $title = 'Welcome to the laracoding.com example email';
        $body = 'Thank you for participating!';

        $this->sentmail($title,$body);

        return "Email sent successfully!";

    }
    public function send4()
    {
        $title = 'Welcome to the laracoding.com example email';
        $body = 'Thank you for participating!';

        $this->sentmail($title,$body);

        return "Email sent successfully!";

    }
    public function send5()
    {
        $user = 'rakib042002@gmail.com';
        $name = 'name';
        $title = 'Welcome to the laracoding.com example email';
        $body = 'Thank you for participating!';
        $data = ([
            'title' =>$title,
            'body' =>$body,            
        ]);
        $this->sentmail($data,$user);

        return "Email sent successfully!";

    }

    protected function sentmail($data, $user)
    {
        Mail::to($user)->send(new WelcomeMail($data));
    }
}
