@extends('layouts2.app')
@section('content')

<div class="container">
    <div class="container mt-3 mb-3">
        <h3 class="text-danger font-weight-bold text-justify text-center">Admin Login</h3>
    </div>
                @include('includes.errormsg')
                @include('includes.success')
    <div class="mt-5 container" style="width: 300px">
        <form method="POST" action="/admin/login/check">
            @csrf

            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
              <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="remember">
              <label class="remember" for="remember" name="remember" >Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
