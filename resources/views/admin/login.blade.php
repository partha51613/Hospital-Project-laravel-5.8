@extends('layouts2.app')
<link rel="stylesheet" href="./public/css/user/registration.css">
@section('content')

    <div class="container mx-auto">
        <div class="form-wrap">
            <h1>Admin Panel</h1>

        </div>
        <div class="form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="phone">Password</label>
                <input type="text" name="password" id="password">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Sign In</button>

    </div>

@endsection
