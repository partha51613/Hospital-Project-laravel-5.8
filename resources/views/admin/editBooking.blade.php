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
@endsection
