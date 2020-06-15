<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\SendMail;
use App\Book;
class SendEmailController extends Controller
{
    public function index()
    {
        return view('admin.sendmail');
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
        $tdata = Book::find($request->id);
        $tdata->message_sent =1;
        $tdata->save();
        return back()->with('success','Email Sent Successfully to '.$mail);
    }

    public function mailto($mailid)
    {

        $data = Book::find($mailid);
        $mail = $data->email;
        return view('admin.sendmail')->with('mail',$mail)->with('id',$mailid);

    }
}
