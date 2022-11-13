{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('frontend/login.css')}}">
    <script src="{{asset('frontend/css/login.js')}}"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="{{URL::to('/admin-dashboard')}}" method="post">
            {{ csrf_field() }}
			<h1>ĐĂNG NHẬP</h1>
			<span>or use your account</span>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<input type="email" name="admin_email" placeholder="Email" />
			<input type="password" name="admin_password" placeholder="Password" />
			<button type="submit" value="login">Sign In</button>
		</form>
	</div>
</div>


</body>
</html> --}}

   <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Loding font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login.css')}}">

    <title>Login</title>
  </head>
  <body>

    <!-- Backgrounds -->

    <div id="login-bg" class="container-fluid">

      <div class="bg-img"></div>
      <div class="bg-color"></div>
    </div>

    <!-- End Backgrounds -->

    <div class="container" id="login">
        <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="login">

            <h1>Login</h1>
            
            <!-- Loging form -->
			<form action="{{URL::to('/login')}}" method="post">
				{{ csrf_field() }}
                    <div class="form-group">
                      <input type="email"  name="admin_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      
                    </div>
                    <div class="form-group">
                      <input type="password"  name="admin_password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                      <div class="form-check">

                      <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                      <label class="form-check-label" for="exampleCheck1">Remember me</label>
                      
                      <label class="forgot-password"><a href="{{URL::to('register-auth')}}">Đăng ký<a></label>

                    </div>
                  
                    <br>
                    <button type="submit" class="btn btn-lg btn-block btn-success">Sign in</button>
                    
                  </form>
             <!-- End Loging form -->

          </div>
        </div>
        </div>
    </div>


  </body>
</html> 
