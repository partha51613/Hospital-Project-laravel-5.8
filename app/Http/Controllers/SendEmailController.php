<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\SendMail;

class SendEmailController extends Controller
{
    public function index()
    {
        return view('admin.sendEmail');
    }

    public function send(Request $request)
    {
        $this->validate($request ,[

            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $mail = $request->email;

        $data = array(
            'name' => $request->name,
            'message' => $request->message,

        );
        Mail::to($mail)->send(new SendMail($data));
        return back()->with('success','Thanks For Contacting');
}
    }
