<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;


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

    public function book()
    {
        return view('user.book');
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


public function storeBookData(Request $request)
    {
        //Validate
   
        $request->validate([

            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'description' => 'required',
            'phone' => 'required',
            'email' => 'required|email',

        ]);
        
        
       // name of the input field i html page must be same on request();
       //$user->fieldname | fieldname must be as in DataBase
       // Sending Data to Database
       
        $book = new Book();
        $book->name = request('name'); 
        $book->age = request('age');
        $book->address = request('address');
        $book->description = request('description');
        $book->phone = request('phone');
        $book->email = request('email');

        //Model saves an instance of data | This model must be imported to this controller
        $book->save();
        // return redirect(route('user.register',"Success"));
        return redirect(route('user.book'))->with('success', ['your message,here']);
    }
}
