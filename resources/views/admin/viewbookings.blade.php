@extends('layouts2.app')
@section('content')

<div class="mt-10">
    <center><h1 class="mt-2 text-danger">Booking Details:</h1></center>
</div>
<div class="container">
    @include('includes.errormsg')
    @include('includes.success')
</div>

<br><br>
<div>

</div>
<div class="container">
        <a href="{{route('adminindex')}}" class="btn btn-danger float-left mb-2 btn-sm"><- Back to Index</a>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-bordered table-sm table-hover">
                <thead class="thead-dark" align="center">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Address</th>
                        <th scope="col">Description</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col" colspan="2">Appointment Status</th>
                        <th scope="col" colspan="2">Options</th>

                    </tr>
                </thead>
                @php
                $id=1
                @endphp
                @foreach ($info as $user)
                <tr align="center">
                    <td>{{$id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->age}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->description}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->email}}</td>
                    @if($user->approved=='0')

                        <td><a href="{{route('approveAppointment',['id'=>$user->id])}}" class="btn btn-primary btn-sm">Approve</a></td>
                        <td><a href="#" class="pl-3 pr-3 btn btn-secondary btn-sm disabled" >Cancel</a></td>

                    @else

                        <td><a href="#" class="btn btn-secondary btn-sm disabled">Approved</a></td>
                        <td><a href="{{route('cancelAppointment',['id'=>$user->id])}}" class="pl-3 pr-3 btn btn-warning btn-sm">Cancel</a></td>

                    @endif
                    <td>
                        <a href="{{route('adminEditBooking',['id'=>$user->id]) }}" class="pl-3 pr-3 btn btn-success btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="{{route('admindeletebookings',['id'=>$user->id]) }}" onclick="return confirm('Are you sure you want to delete ?')" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    @php
                        $id++
                    @endphp
                </tr>
                @endforeach
            </table>
        </div>
</div>

@endsection
