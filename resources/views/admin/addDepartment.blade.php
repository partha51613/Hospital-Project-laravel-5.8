@extends('layouts2.app')
@section('content')

<div class="container">
    <center>
    <h2 class="mt-3">Add Department</h2>
    </center>
    <form action="{{route('storedepartment')}}">
        <div class="container">
            @include('includes.errormsg')
            @include('includes.success')
        </div>
        <div class="form-group">
        <input type="text" name='department' class="form-control mt-5" placeholder="Enter Department Name">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Submit</button>

    </form>
</div>
@endsection
