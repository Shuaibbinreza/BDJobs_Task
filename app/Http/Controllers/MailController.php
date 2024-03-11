<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
use App\Models\User;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $inputValue = $request->input('emailInput');
        $user = User::where('email', $inputValue)->first();

        $mailData = [
            'title' => 'Login/Register on tappware-user',
            'body' => 'Your login / registration link is in the mail content.',
            'link'=> $inputValue,
            'check'=> $user,
        ];

        Mail::to($inputValue)->send(new DemoMail($mailData));

        dd('Email send successfully.');
    }
}