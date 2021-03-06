<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login to Documentation</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png"      href="/assets/auth/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/assets/auth/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/assets/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/assets/auth/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/assets/auth/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="/assets/auth/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/assets/auth/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/assets/auth/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="/assets/auth/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/assets/auth/css/util.css">
  <link rel="stylesheet" type="text/css" href="/assets/auth/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  

  <div class="modal fade" id="welcome" tabindex="-1" role="dialog" aria-labelledby="welcome" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="welcomes">Welcome</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modaleditorusersbody">
          <span id="nameUsers"></span>
      </div>
    </div>
  </div>
</div>


  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-85 p-b-20">
        <form class="login100-form validate-form" id="auth">
          <!--
          <span class="login100-form-title p-b-70">
            Login
          </span>
          -->
          
          <span class="login100-form-avatar">YOUR LOGO</span>

          <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
            <input class="input100" id="username" type="text" name="username">
            <span class="focus-input100" data-placeholder="Username"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
            <input class="input100" id="password" type="password" name="password">
            <span class="focus-input100"  data-placeholder="Password"></span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

          <ul class="login-more p-t-190">
            <!--
            <li class="m-b-8">
              <span class="txt1">
                Forgot
              </span>

              <a href="#" class="txt2">
                Username / Password?
              </a>
            </li>
            -->
            
            <li>
              <span class="txt1">
                Belum punya akun ?
              </span>

              <a href="#" class="txt2">
                Hubungi Administrator
              </a>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="/assets/auth/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="/assets/auth/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="/assets/auth/vendor/bootstrap/js/popper.js"></script>
  <script src="/assets/auth/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="/assets/auth/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="/assets/auth/vendor/daterangepicker/moment.min.js"></script>
  <script src="/assets/auth/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="/assets/auth/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="/assets/auth/js/main.js"></script>
  <script src="/assets/js/ajax.min.js"></script>
  <script src="/assets/auth/js/auth.js"></script>
  

  <script>
    
    (function () {
    
  $("#auth").reqjson('/login' , function (e , data) {
    if ( data.success == true ) {
      $("#nameUsers").html(data.msg);
      $("#welcome").modal();
      setTimeout(function () {
      window.location.reload();

      } , 2600);
    }
  });

})();
  </script>

</body>
</html>