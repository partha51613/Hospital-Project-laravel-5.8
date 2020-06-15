<?php

namespace App\Http\Controllers;
use App\Book;
use App\Department;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('admin.login');
    }


    //Booking Routes
    public function viewbookings()
    {
        $data = Book::all();
        return view('admin.viewbookings')->with('info', $data);
    }


    public function deletebookings($id)
    {
        $posts = Book::find($id);
        $posts->delete();
        return redirect(route('adminviewbookings'))->with('deleted','Booking Deleted Successfully');
    }

    public function editbookings($id)
    {
        $data = Book::find($id);
        return view('admin.editBooking')->with('data',$data);

    }

    public function storeNewBooking(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'description' => 'required',
            'phone' => 'required',
            'email' => 'required|email',

        ]);

        $book = Book::find($id);
        $book->name = request('name');
        $book->age = request('age');
        $book->address = request('address');
        $book->description = request('description');
        $book->phone = request('phone');
        $book->email = request('email');

        //Model saves an instance of data | This model must be imported to this controller
        $book->save();
        return redirect(route('adminviewbookings'))->with('success','Appointment Edited Successfully.');

    }

    //Department Routes
    public function departments()
    {
        $data = Department::all();
        return view('admin.departments')->with('departmentdata',$data);
       // return view('admin.departments',compact($data));
    }


    public function deletedepartments($id)
    {
        $dept = Department::find($id);
        $dept->delete();
        return redirect(route('adminviewdepartments'))->with('deleted','Department Deleted Successfully');
    }


    public function addDepartment()
    {
        return view('admin.addDepartment');
    }


    public function editdepartments($id)
    {
        $data = Department::find($id);
        return view('admin.editDepartment')->with('tdata',$data);
    }


    public function storedepartment(Request $request)
    {
        $dept = new Department();
        $dept->DepartmentName = request('department');
        $dept->save();
        return redirect(route('adminviewdepartments'))->with('added','Department Added Successfully');
    }


    public function storenewdepartment(Request $request, $id)
    {

         $dept = Department::find($id);
         $dept->DepartmentName = request('department');
         $dept->save();
         return redirect(route('adminviewdepartments'))->with('edited','Department Edited Successfully');

    }

    public function approveAppointment($id)
    {
        $appt = Book::find($id);
      //  $temp = $appt->name;
        $appt->approved = 1;

        $appt->save();
        return redirect(route('adminviewbookings'))->with('success','Appointment Approved');
    }
    public function cancelAppointment($id)
    {
        $appt = Book::find($id);
        $appt->approved = 0;
        $appt->save();
        return redirect(route('adminviewbookings'))->with('deleted','Appointment Cancelled');
    }

}
