<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\EmailTamplate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send1()
    {
        $tamplate = EmailTamplate::findOrFail(1);
        $user = User::findOrFail(1);
        $this->sentmail($tamplate,$user);

        return "Email sent successfully!";

    }
    public function send2()
    {
        $tamplate = EmailTamplate::findOrFail(5);
        $user = User::findOrFail(1);
        $user->offer_name = "Offer Name Is Offer Name";
        $this->sentmail($tamplate,$user);

        return "Email sent successfully!";

    }
    public function send3()
    {
        $tamplate = EmailTamplate::findOrFail(6);
        $user = User::findOrFail(1);
        $user->invoice_payout = 1200;
        $user->invoice_id = 'sdbhbhd154';
        $this->sentmail($tamplate,$user);

        return "Email sent successfully!";

    }
    public function send4()
    {
        $tamplate = EmailTamplate::findOrFail(8);
        $user = User::findOrFail(1);
        $user ->offer_name = 'Offer';
        $this->sentmail($tamplate,$user);

        return "Email sent successfully!";
    }
    public function send5()
    {
        $tamplate = EmailTamplate::findOrFail(9);
        $user = User::findOrFail(1);
        $user->link = $user->token;
        $this->sentmail($tamplate,$user);

        return "Email sent successfully!";

    }

    protected function sentmail($tamplate, $user)
    {
        $subject = $tamplate->subject;
        $body = $tamplate->description;
        $title = $tamplate->title;
        $appname = 'Your Network Name';
        $data = ([
            'body' =>$this->getConvertBody($body,$user) ,            
            'subject' =>$subject,
        ]);
        // Mail::to($user)->send(new WelcomeMail($data));
        Mail::to($user)->queue(new WelcomeMail($data));
    }
    function getConvertBody($content,$user): string
    {
        $site_title = env('APP_NAME');
        $search = array('{name}', '{network_name}', '{email}', '{data}','{link}','{user_type}','{offer_name}','{invoice_payout}','{invoice_id}');
        $replace = array($user->name, $site_title, $user->email, $user->created_at,$user->link,$user->role,$user->offer_name,$user->invoice_payout,$user->invoice_id);
        return str_replace($search, $replace, $content);
    }

}

