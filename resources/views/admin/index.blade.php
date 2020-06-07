@extends('layouts2.app')
@section('content')

    <div class="container">
        <h1>Admin Index</h1>

        <ol>
            <li><a href="{{route('adminviewbookings')}}">View Bookings</a></li>

            <li> <a href="{{route('adminviewdepartments')}}">View Departments</a></li>
        </ol>
    </div>
@endsection
