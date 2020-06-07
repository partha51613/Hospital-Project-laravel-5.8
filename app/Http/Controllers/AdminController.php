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
    public function viewbookings()
    {
        $data = Book::all();
        //dd($data);
       // return $data;
        return view('admin.viewbookings')->with('info', $data);
    }
    public function deletebookings($id)
    {
        $posts = Book::find($id);
        $posts->delete();
        return redirect(route('adminviewbookings'))->with('deleted','Booking Deleted Successfully');
    }
    public function departments()
    {
        $data = Department::all();
        return view('admin.departments')->with('departmentdata',$data);
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
}
