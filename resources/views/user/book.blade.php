@extends('layouts2.app')
@section('content')
  <div class="container mx-auto" style="width: 800px" >
        <form action="{{route('bookstore')}}">
            <div class="form-header">
                <h3 class="pt-3 text-primary font-weight-bold font-weight-bold"><center>Book An Appointment</center></h3>
            </div>
            <div>
                    @include('includes.errormsg')
                    @include('includes.success')
             </div>
             <a href="{{route('home')}}" class="mt-4 mb-3 btn btn-danger float-left mb-2 btn-sm"><- Homepage</a>
            <div class="form-group mt-3">
              <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            </div>

            <div class="form-group">
                <input type="number" name="age" class="form-control" id="age" placeholder="Age">
            </div>

            <div class="form-group">
                <textarea name="address"  class="form-control" id="address" placeholder="Address" cols="30" rows="2"></textarea>

              </div>

            <div class="form-group">

                <label for="cars">Department : </label>
                    <select name="department" id="department" selected="----------">
                        <option value="----------">----------</option>
                        @foreach ($data as $dept)
                       <option value="{{$dept->DepartmentName}}">{{$dept->DepartmentName}}</option>
                       @endforeach
                    </select>
            </div>

            <div class="form-group">
                <input type="number" name="phone" class="form-control" id="phone"   placeholder="Phone">
              </div>

            <div class="form-group">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>

            <button type="submit" class="btn-block btn btn-success">Book</button>
          </form>
    </div>
@endsection
