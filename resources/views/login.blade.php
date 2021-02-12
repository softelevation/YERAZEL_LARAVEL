<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="front/css/bootstrap.min.css">
    <link rel="stylesheet" href="front/css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Log In</title>
  </head>
  <style type="text/css">
    .login-section {
      background-color: #5086ff;
      height: 100vh;
          padding: 50px 0;
  }
  .login-pop {
    max-width: 500px;
    margin: 0 auto;
    background-color: #fff;
    text-align: center;
    border-radius: 20px;
    padding: 30px 70px 50px;

  }
  .login-logo img {
      width: 130px;
  }
  h3.login-heading {
      color: #4254a5;
      font-weight: bold;
      margin: 15px 0 5px;
  }

  p.sub-cont {
      margin-bottom: 20px;
          font-size: 16px;
  }
  .login-pop form .form-field {
      margin-bottom: 20px;
  }
  .login-pop form .form-field input {
    width: 100%;
    height: 50px;
    background-color: #f1f4f9;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
}
.login-pop form .form-field.form-check input {
    width: 20px;
    height: 20px;
    border-radius: 6px;
}
.form-field.form-check {
    text-align: left;
}
.login-pop form .form-field.form-check label {
    margin-left: 10px;
}
button.signin-btn {
    width: 100%;
    height: 50px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 25px;
    background: #5a8cff;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}
.or-col p {
    width: 100%;
    position: relative;
    text-transform: uppercase;
    line-height: normal;
}
.or-col p:before {
    content: '';
    width: 40%;
    height: 1px;
    background: #cccccc;
    position: absolute;
    left: 0;
    top: 8px;
}
.or-col p:after {
    content: '';
    width: 40%;
    height: 1px;
    background: #cccccc;
    position: absolute;
    right: 0;
    top: 8px;
}
button.signin-btn.signin-facebook i {
    float: left;
    background: #334877;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    border-radius: 5px 0 0 5px;
}
button.signin-btn.signin-facebook {
    padding: 0;
    background: #436092;
}
button.signin-btn.signin-facebook span {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 50px;
}
button.signin-btn.signin-google i {
    background: #d53129;
}
button.signin-btn.signin-google {
    background: #df443c;
}
p.signing-in-hlep {
    text-align: left;
    color: #7b7b7b;
    font-size: 15px;
}
button.signin-btn.signin-facebook {
    margin-bottom: 12px;
}
  </style>
  <body>
    
  <div class="login-section">
    <div class="login-pop">
      <div class="login-logo">
        <img src="front/images/logo.png" alt="logo">
      </div>
      <h3 class="login-heading">Login to Account</h3>
      <p class="sub-cont">Enter your email and passwordto continue</p>
      {{ Form::open(array('url' => 'login')) }}
        <div class="form-field">
			{{ Form::text('email') }}
        </div>
        <div class="form-field">
          {{ Form::password('password') }}
		  @if(Session::has('invalid_login'))
		  <p class='alert alert-danger'>{{Session::get('invalid_login')}}</p>
		  @endif
        </div>
        <div class="form-field form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember Password</label>
        </div>
        <button type="submit" class="signin-btn">Sign In</button>
        <div class="or-col">
          <p>Or</p>
        </div>
        <button type="submit" class="signin-btn signin-facebook mt-4"><i class="fa fa-facebook" aria-hidden="true"></i></i> <span>Sign in with Facebook</span></button>
        <button type="submit" class="signin-btn signin-facebook signin-google"><i class="fa fa-google-plus" aria-hidden="true"></i> <span>Sign in with Google</span></button>
        <p class="signing-in-hlep">Need help signing in?</p>
      {{ Form::close() }}
    </div>
  </div>

    <script src="front/js/custom.js"></script>
    <script src="front/js/slim.min.js"></script>
    <script src="front/js/popper.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
  </body>
</html>