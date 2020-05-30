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
        <form>
            <div class="form-header">
                <h3 class="pt-3 text-primary "><center>Book An Appointment</center></h3>
            </div>
            <div class="form-group">
              <label for="name">Patient Name</label>
              <input type="name" class="form-control" id="name">
            </div>

            <div class="form-group">
              <label for="department">Department</label>
              <input type="department" class="form-control" id="department">
            </div>

            <div class="form-group">
                <label for="time_slot">TimeSlot</label>
                <input type="time_slot" class="form-control" id="time_slot">
              </div>

              <div class="form-group">
                <label for="address">Address</label>
                <input type="address" class="form-control" id="address">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">
              </div>

              <div class="form-group">
                <label for="phone">Phone No </label>
                <input type="phone" class="form-control" id="phone">
              </div>

            <button type="submit" class="btn btn-success">Book</button>
          </form>
    </div>
</body>
</html>
