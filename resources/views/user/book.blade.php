<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto" >
        <form action="{{route('book.store')}}">
            <div class="form-header">
                <h3 class="pt-3 text-primary "><center>Book An Appointment</center></h3>
            </div>
            <div>
                    @include('includes.errormsg')
             </div>
            <div class="form-header">
                <h3 class="pt-3 text-primary ">Personal Information</h3>
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="name" name="name" class="form-control" id="name">
            </div>

            <div class="form-group">
              <label for="department">Age</label>
              <input type="department" name="age" class="form-control" id="department">
            </div>

            <div class="form-group">
                <label for="time_slot">Address</label>
                <input type="time_slot" name="address" class="form-control" id="time_slot">
              </div>

              <div class="form-header">
                <h3 class="pt-3 text-primary ">Health Issue</h3>
                </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="description"  name="description" class="form-control" id="description">
              </div>
 
              <div class="form-header">
                <h3 class="pt-3 text-primary ">Contact Info</h3>
                </div>
              <div class="form-group">
                <label for="phone">Phone No </label>
                <input type="phone"  name="phone" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="phone">Email</label>
                <input type="phone" name="email" class="form-control" id="phone">
              </div>

            <button type="submit" class="btn btn-success">Book Your Appoinment</button>
          </form>
    </div>
</body>
</html>
