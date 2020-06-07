@extends('layouts2.app')
@section('content')

    <div class="mt-10">
        <center><h1 class="mt-2">Department List</h1></center>
    </div>
    <div class="container">
        @include('includes.success')
    </div>

    <br><br>
    <div class="container">
        <td><a href="{{route('adminaddDepartment')}}" class="btn btn-primary float-right mb-2">Add Department</a></td>
            <table class="table table-dark table-striped table-bordered ">
                <thead class="thead-dark">
                    <tr>
                        {{-- <th scope="col">ID</th> --}}
                        <th scope="col">DepartmentName</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                @foreach ($departmentdata as $department)
                <tr>
                    {{-- <td>{{$department->id}}</td> --}}
                    <td>{{$department->DepartmentName}}</td>
                <td><a href="{{ route('admindeletedepartments',['id'=> $department->id]) }}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach

            </table>
    </div>
@endsection
