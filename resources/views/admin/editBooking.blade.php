@extends('layouts2.app')
@section('content')

<div class="container mx-auto" style="width: 800px" >
    <form action="{{route('storeNewBooking',['id'=>$data->id])}}">
        <div class="form-header">
            <h3 class="pt-3 text-primary font-weight-bold""><center>Book An Appointment</center></h3>
        </div>
        <div>
                @include('includes.errormsg')
                @include('includes.success')
         </div>

        <div class="form-group mt-3">
          <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}"}}>
        </div>

        <div class="form-group">
            <input type="number" name="age" class="form-control" id="age" value="{{$data->age}}">
        </div>

        <div class="form-group">
            <textarea name="address" class="form-control" id="address" cols="30" rows="2">{{$data->address}}</textarea>

          </div>

        <div class="form-group">
            <input type="text" name="description" class="form-control" id="description" value="{{$data->description}}">
          </div>

        <div class="form-group">
            <input type="number"  name="phone" class="form-control" id="phone" value="{{$data->phone}}">
          </div>

        <div class="form-group">
            <input type="email" name="email" class="form-control" id="email" value="{{$data->email}}">
          </div>

        <button type="submit" class="btn btn-block btn-success">Edit</button>
      </form>
</div>









































































{{--
  <div class="container mx-auto" >
        <form action="{{route('storeNewBooking',['id'=>$data->id])}}">
            <div class="form-header">
                <h3 class="pt-3 text-primary "><center>Book An Appointment</center></h3>
            </div>
            <div>
                    @include('includes.errormsg')
                    @include('includes.success')
             </div>
            <div class="form-header">
                <h3 class="pt-3 text-primary ">Personal Information</h3>
            </div>
            <div class="form-group">
              <label for="name">Name</label>
            <input type="name" name="name" class="form-control" id="name" value="{{$data->name}}">
            </div>

            <div class="form-group">
              <label for="department">Age</label>
              <input type="department" name="age" class="form-control" id="department" value="{{$data->age}}">
            </div>

            <div class="form-group">
                <label for="time_slot">Address</label>
                <input type="time_slot" name="address" class="form-control" id="time_slot" >
              </div>

              <div class="form-header">
                <h3 class="pt-3 text-primary ">Health Issue</h3>
                </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="description"  name="description" class="form-control" id="description" value="{{$data->description}}">
              </div>

              <div class="form-header">
                <h3 class="pt-3 text-primary ">Contact Info</h3>
                </div>
              <div class="form-group">
                <label for="phone">Phone No </label>
                <input type="phone"  name="phone" class="form-control" id="phone" value="{{$data->phone}}">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{$data->email}}">
              </div>

            <button type="submit" class="btn btn-success">Edit Appoinment</button>
          </form>
    </div> --}}

@endsection
