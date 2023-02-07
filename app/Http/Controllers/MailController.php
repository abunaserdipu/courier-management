<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Welcome in Web Application Service',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('mdabunaserdipu@gmail.com')->send(new DemoMail($mailData));

        dd("Email is sent successfully.");
    }

    public function contactForm()
    {

        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        $mailData = [
            'senderEmail' => $request->sender_email,
            'senderName' => $request->sender_name,
            'senderMessage' => $request->message,
        ];
        Mail::to('mdabunaserdipu@gmail.com')->send(new DemoMail($mailData));
        dd("Email is sent successfully.");
        // print_r($request);
        // $datas = $request->all();
        // Mail::send('mdabunaserdipu@gmail.com')->send("Hello");

        // print_r($datas);
    }
}
