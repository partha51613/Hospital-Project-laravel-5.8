<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function register()
    {
        return view('user.registration');
    }
    public function login()
    {
        return view('user.login');
    }
    public function storeRegistrationData(Request $request)
    {
        //Validate

        $request->validate([

            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email'

        ]);

        //name of the input field i html page must be same on request();
        //$user->fieldname | fieldname must be as in DataBase
        //Sending Data to Database
        $user = new User();
        $user->fname = request('firstname');
        $user->lname = request('lastname');
        $user->email = request('email');
        $user->password = request('password');

        //Model saves an instance of data | This model must be imported to this controller
        $user->save();
        // return redirect(route('user.register',"Success"));
        return redirect(route('user.register'))->with('success', ['your message,here']);
    }
}
