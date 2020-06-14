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


            <a href="{{route('adminaddDepartment')}}" class="btn btn-primary float-right mb-2 btn-sm">Add Department</a>
            <a href="{{route('adminindex')}}" class="btn btn-danger float-left mb-2 btn-sm"><- Back to Index</a>


            <div class="table-responsive">
                <table class="table table-dark table-striped table-bordered table-sm table-hover">

                    <thead class="thead-dark" align="center">

                        <tr>
                            {{-- <th scope="col">ID</th> --}}
                            <th scope="col">Sr.No</th>
                            <th scope="col">Department Name</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    @php
                        $id=1
                    @endphp
                    @foreach ($departmentdata as $department)

                    <tr align="center">

                        <td>{{$id}}</td>
                        <td>{{$department->DepartmentName}}</td>
                        @php
                        $id++
                        @endphp
                    <td>
                        <a href="{{route('admineditDepartments',['id'=>$department->id])}}" class="btn btn-primary btn-sm text-nowrap">Edit</a>
                        <a href="{{ route('admindeletedepartments',['id'=> $department->id]) }}" onclick="return confirm('Are you sure you want to delete ?')" class="btn btn-danger btn-sm ">Delete</a></td>
                    </tr>
                    @endforeach

                </table>
            </div>
    </div>
@endsection
