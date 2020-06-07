@extends('layouts2.app')
@section('content')
<div class="mt-10">
    <center><h1 class="mt-2">Booking Details:</h1></center>
</div>
<div class="container">
    @include('includes.success')
</div>

<br><br>
<div>

</div>
<div class="container">

        <table class="table table-dark table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Patient Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Description</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>

                    <th scope="col"></th>
                </tr>
            </thead>

            @foreach ($info as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->description}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>

                <td><a href="{{route('admindeletebookings',['id'=>$user->id]) }}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach

        </table>
</div>



@endsection
