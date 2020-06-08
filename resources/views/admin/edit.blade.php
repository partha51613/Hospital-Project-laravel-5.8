@extends('layouts.adminpannel')

@section('title')

admin
@endsection


@section('content')

<div class="container">
<div class ="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4>Edit Bookings</h4>
</div>
<div class="card-body">
<div class="row">
<div class="col-md-6">

<form action="{{route('updatebookingdata',['id'=>$user->id])}}">

<div class="form-group">
    <label>Patient Name</label>
<input type="text" name="name" class="form-control" placeholder="{{$user->name}}">
    </div>
    <div class="form-group">
    <label>Age</label>
    <input type="text" name="age" class="form-control" placeholder="{{$user->age}}">
    </div>

    <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" placeholder="{{$user->address}}">
    </div>

    <div class="form-group">
    <label>Description</label>
    <input type="text" name="description" class="form-control" placeholder="{{$user->description}}">
    </div>


    <div class="form-group">
    <label>Phone</label>
    <input type="text" name="phone"  class="form-control" placeholder="{{$user->phone}}">
    </div>

    <div class="form-group">
    <label>Email</label>
    <input type="text" name="email"  class="form-control" placeholder="{{$user->email}}">
    </div>
    <div class="form-group">
    
     <button class="btn btn-success">Update</button>
     <a href="/admin" class="btn btn-danger">Cancel</a>
      </div>
  </div>
  

</form>


</div>
</div>

</div>
</div>

</div>

</div>
</div>
<!--<button type="submit" class="btn btn-success">Update</button>
<a href="/admin" class="btn btn-danger">Cancel</button>-->
@endsection

@section('scripts')

@endsection