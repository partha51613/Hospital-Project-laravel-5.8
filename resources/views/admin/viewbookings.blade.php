@extends('layouts2.app')
@section('content')

<div class="mt-3">
    <h1 class="text-danger font-weight-bold text-justify text-center">Booking Details:</h1>
</div>
<div class="container">
    @include('includes.errormsg')
    @include('includes.success')
</div>

<div>

</div>
<div class="container">
    <p><h4><b>Note:</b></h4></p>
    <p><b>* Appointment cannot be cancelled once mail is sent.</b></p>
        <a href="{{route('adminindex')}}" class="btn btn-danger float-left mb-2 btn-sm"><- Back to Index</a>

        <div class="table-responsive">
            <table class="table table-dark table-striped table-bordered table-sm table-hover">
                <thead class="thead-dark" align="center">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Patient</th>
                        <th scope="col">Age</th>
                        <th scope="col">Address</th>
                        <th scope="col">Description</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col" colspan="2">Appointment Status</th>
                        <th scope="col" colspan="2">Options</th>
                        <th scope="col" colspan="2">Mail</th>
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

                        <td><a href="{{route('approveAppointment',['id'=>$user->id])}}" class="mt-2 btn btn-primary btn-sm">Approve</a></td>
                        <td><a href="#" class="mt-2 pl-3 pr-3 btn btn-secondary btn-sm disabled" >Cancel</a></td>

                    @elseif($user->approved=='1' && $user->message_sent=='1')

                        <td><img src="./images/icon/tick.png" alt="" height="20px" width="20px" class="mt-2"></td>
                        <td></td>


                    @else

                        <td><img src="./images/icon/tick.png" alt="" height="20px" width="20px" class="mt-2"></td>
                        <td><a href="{{route('cancelAppointment',['id'=>$user->id])}}" class="mt-2 pl-3 pr-3 btn btn-warning btn-sm">Cancel</a></td>

                    @endif
                    <td>
                        <a href="{{route('adminEditBooking',['id'=>$user->id]) }}" class="mt-2 pl-3 pr-3 btn btn-success btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="{{route('admindeletebookings',['id'=>$user->id]) }}" onclick="return confirm('Are you sure you want to delete ?')" class="mt-2 btn btn-danger btn-sm">Delete</a>
                    </td>
                    @if($user->message_sent=='0')
                        <td><a href="{{route('mailto',['id'=>$user->id])}}" class="mt-2 btn btn-primary btn-sm">Send</a></td>
                    @else
                        <td><img src="./images/icon/tick.png" alt="" height="20px" width="20px" class="mt-2"></td>
                    @endif
                    @php
                        $id++
                    @endphp
                </tr>
                @endforeach
            </table>
        </div>
</div>

@endsection
