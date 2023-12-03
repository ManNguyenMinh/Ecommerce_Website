<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Suyt | Sign In</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta content="" name="description" />
  <meta content="" name="author" />

  <link rel="shortcut icon" href="images/favicon.png" />

  <!--Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

  <!-- Icons -->
  <link href="assets/fontawesome-pro-5.14.0/css/all.min.css" rel="stylesheet">

  <!-- Main CSS Styles -->
  <link href="css/suyt.min.css" rel="stylesheet" type="text/css" />
  <link href="css/suyt.custom.css" rel="stylesheet" type="text/css" />
  <style>
    body {
      background-color: #fff;
      font-family: Roboto, Arial, Helvetica, sans-serif;
    }

    input[type=email],
    input[type=password],
    input[type=email]:focus,
    input[type=password]:focus {
      text-align: left;
      border-radius: 0px;
      min-width: 300px;
      min-height: 50px;
      font-size: 12pt;
      margin: 15px 0px;
      font-weight: 300;
    }

    .loginContainer {
      height: 100vh;
      position: relative;
    }

    .loginFields {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    .loginBox h5 {
      color: #555;
      font-size: 11pt;
      padding: 0px 10px 30px;
      font-weight: 100;
    }

    .form-control::placeholder {
      color: #aaa;
      opacity: 1;
    }

    .btn-login {
      font-size: 11pt;
      display: flex;
      padding: 10px 24px;
      justify-content: center;
      align-items: center;
      align-self: stretch;
      border-radius: 100px;
      width: 100%;
    }

    .loginBg {
      height: 100%;
      background-image: url("images/login-bg.jpg");
      background-repeat: no-repeat;
      background-position: center bottom;
      background-size: cover;
      height: 100vh;
    }

    .login-background {
      width: 100%;
      height: 100vh;
      object-fit: cover;
    }

    .prestart-form-control {
      display: flex;
      padding: 9px 16px;
      align-items: center;
      flex: 1 0 0;
      border-radius: 100px !important;
      min-width: 400px !important;
      height: 39px;
      border-color: var(--color-placeholder);
    }

    @media screen and (max-width: 576px) {
      .prestart-form-control {
        min-width: 328px !important;
      }
    }

    .prestart-form-control:focus {
      border-radius: 100px;
      border: 1px solid var(--color-dark);
      background: var(---gray-100);
    }

    .prestart-form-control::placeholder {
      color: var(--color-placeholder);
      font-size: 13px;
      font-weight: 400;
      line-height: 21px;
    }
  </style>
</head>

<body>
  <form method="post" id="loginAccessForm">
    <div class="container-fluid">
      <div class="row">
        <div class="col-7 p-0 d-none d-lg-block order-2">
          <img src="images/login.png" class="login-background">
        </div>
        <div class="col-lg-5">
          <div class="loginContainer">
            <div class="loginFields">
              <div class="loginBox">
                <img src="images/logo.svg" class="img-fluid" style="width: 101px; max-width: 300px;">
                <h3 style="color: var(--color-heading)" class="mt-7">Sign In</h3>

                <div class="form-group mb-2"><label class="mt-7 label-small" style="color: var(--color-heading)">Email address</label><input type="email" value="" class="form-control prestart-form-control my-1" placeholder="name@work-email.com" name="systemLoginID" maxlength="95" required autofocus value=""></div><div class="form-group mt-7"><div class="d-flex align-items-center justify-content-between"><label class="label-small" style="color: var(--color-heading)">Password</label><a href="forgetpassword.php" class="label-small" style="color: var(--info-500)">Forgot Password?</a></div><input type="password" value="" class="form-control prestart-form-control my-1" placeholder="Enter your password" name="systemPassword" maxlength="95" required value=""></div><div class="text-center mt-5 pt-5"><button type="submit" class="btn btn-success btn-login" name="systemLogin" id="systemLogin" onclick='return LoginAuthenticateDisplay();'>Sign In</button><button class="btn btn-success btn-login disabled" id="systemSigningIn" style="display:none">Signing In....</button></div><div class="text-center mt-10"><div class="paragraph">New on Suyt? <a href="register.php" style="color: var(--info-500)">Create an account</a></div></div>              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
</html>
<script>
    function LoginAuthenticateDisplay() {

        var loginForm = document.getElementById('loginAccessForm');
        if (loginForm.checkValidity()) {
            document.getElementById('systemLogin').style.display = 'none';
            document.getElementById('systemSigningIn').style.display = '';
        } else {
            alert("Please key in your Email and Password");
        }
    }
</script>