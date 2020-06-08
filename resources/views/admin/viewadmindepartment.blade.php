@extends('layouts.adminpannel')

@section('title')

admin
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new Department</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/savedepartment" method="POST">
          {{ csrf_field() }}
        <div class="modal-body">
            
            <div class="form-group">
              <label for="DepartmentName" class="col-form-label">Department name</label>
              <input type="text" name="DepartmentName" class="form-control" id="DepartmentName">
            </div>
          
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Add</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           </div>
        </form>
      </div>
    </div>
  </div>


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">View departments
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add department</button>
                </h4>
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>ID</th>
                      <th>Department name</th>
                    </thead>
                    <tbody>
                        @foreach ($departmentdata as $department)
                      <tr>
                      <td>{{$department->id}}</td>
                        <td>{{$department->DepartmentName}}</td>
                        
                        <td>
                          <a href="#" class="btn btn-success">EDIT</a>
                          <a href ="" class="btn btn-danger">DELETE</a>
                        </td>
                    </tr>
                    @endforeach
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