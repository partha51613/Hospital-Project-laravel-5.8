@extends('layouts2.app')
@section('content')

<div class="mt-10">

    <center><h1 class="mt-2 text-primary">Send Mail</h1></center>
</div>
<div class="container">
    @include('includes.errormsg')
    @include('includes.success')
</div>

<br><br>
    <div class="container">
                <a href="{{route('adminviewbookings')}}" class="pl-3 pr-3 btn btn-primary float-left mb-2 btn-sm"><- Back to Bookings</a>
        <form action="{{url('sendemail/send')}}" method="post"><br><br>

            @csrf
            <div class="form-group">
                <label for="name"><b>Enter your Name</b></label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name"><b>Enter your Email</b></label>
                <input type="email" name="email" class="form-control" value={{$mail}}>
            </div>
            <div class="form-group">
                <label for="message"><b>Enter your Message</b></label>
                <textarea name="message" id="message" class="form-control" cols="30" rows="4"></textarea>
            </div>

            <div class="form-group">

                <input type="hidden" name="id" class="form-control" value={{$id}}>
            </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Send" class="btn btn-block btn-primary">
            </div>

        </form>
    </div>

@endsection
