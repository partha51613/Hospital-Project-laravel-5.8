<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Form Styling</title>
    <link rel="stylesheet" href="./css/user/registration.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  </head>

  <body>

  <form action="{{route('user.store')}}">

            <div class="container">
                <div class="form-wrap">
                    <h1>Sign Up</h1>
                    <p>Its free and will always be</p>
                </div>
                <div>
                    @include('includes.errormsg')
                </div>
                <div class="form">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" id="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" id="lastname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>

                </div>

                <button type="submit" class="btn">Sign Up</button>

                <div class="signup">
                    <p>By Signing up ,you accept the terms and condition of the website</p>
                </div>
                <div class="footer">
                    <h4>Already have an account ? Login here</h4>
                </div>

            </div>
        </form>

  </body>
</html>
