@extends('layouts.adminpannel')

@section('title')

admin
@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">View Booking</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>ID</th>
                      <th>Patient Name</th>
                      <th>Age</th>
                      <th>Address</th>
                      <th>Description</th>
                      <th>Phone</th>
                      <th>Email</th>
                    </thead>
                    <tbody>
                 
                      <tr>
                      <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->age}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->description}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="{{route('admineditbookings',['id'=>$user->id])}}" class="btn btn-success">EDIT</a></td>
                        <td><a href ="#" class="btn btn-danger">DELETE</a></td>
                    </tr>
                  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        @endsection

        @section('scripts')

        @endsection