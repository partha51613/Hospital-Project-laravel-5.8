<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;


class UserController extends Controller
{

    public function book()
    {
        return view('user.book');
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
        return redirect(route('userbook'))->with('success','Appointment Booked Successfully.');

        // return redirect(route('user.register',"Success"));

    }
}
