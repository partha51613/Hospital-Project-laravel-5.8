@extends('layouts2.app')
@section('content')


        <div class="mt-2 header text-primary">
            <center><h1>Admin Index</h1></center>


        <div class=" mt-5 container text-center " style="width: 450px" >

                <table class="table align-items-left table-bordered table-hover">

                    <tbody class="text-left">
                        <tr><td><li><a href="{{route('adminviewbookings')}}">View Bookings</a></li></tr></td>
                        <tr><td><li> <a href="{{route('adminviewdepartments')}}">View Departments</a></li></tr></td>
                        <tr><td><li> <a href="{{route('mail')}}">Send Mail</a></li></tr></td>
                    </tbody>

                </table>

        </div>
    </div>
@endsection
