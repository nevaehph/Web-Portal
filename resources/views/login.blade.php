<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Teacher's Portal</title>
    <!-- Bootstrap -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/login.css') }}" type="text/css" rel="stylesheet" />
  </head>
  <body style="background-image: url({{ URL::asset('assets/img/login-bg.jpg') }}); background-size:cover;">
    <div class="container" style="margin-top: 15%;">
        <div class="row">
            <div class="panel panel-primary col-md-6 col-md-offset-3">
              <div class="panel-body">
                <form action="/doLogin" method="POST" class="form-signin">
                    {{ csrf_field() }}
                    <h2 class="form-signin-heading">Teacher's Portal</h2>
                    <label for="inputUser" class="sr-only">Username</label>
                    <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
              </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
  </body>
</html>
