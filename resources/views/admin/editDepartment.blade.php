@extends('layouts2.app')
@section('content')

<div class="container">
    <center>
    <h2 class="mt-3">Edit Department</h2>
    </center>
    <form action="{{route('storenewdepartment',['id'=>$tdata->id])}}">
        <div class="container">
            @include('includes.errormsg')
            @include('includes.success')
        </div>
        <div class="form-group">
        <input type="text" name='department' class="form-control mt-5" value="{{$tdata->DepartmentName}}">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Submit</button>

    </form>
</div>

@endsection
