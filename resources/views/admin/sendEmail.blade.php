@extends('layouts2.app')
@section('content')

    <div class="container">

        <div class="container">
            @include('includes.errormsg')
        </div>
        <form action="{{url('sendemail/send')}}" method="post">

            @csrf
            <div class="form-group">
                <label for="name">Enter your Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Enter your Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Enter your Message</label>
                <textarea name="message" id="message" class="form-control" cols="30" rows="4"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Send" class="btn btn-block btn-primary">
            </div>

        </form>
    </div>

@endsection
