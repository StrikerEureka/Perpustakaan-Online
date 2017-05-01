<?php
	include "cek.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SeL Admin Login</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="login.php" class="popup-form" method="POST">
              <h1>Admin Login</h1>
			  <form action="login.php" class="popup-form" method="post">
              <div>
                <input type="text" name="fUsername" class="form-control" placeholder="username" required/>
              </div>
              <div>
                <input type="password" name="fPassword" class="form-control" placeholder="password" required/>
              </div>
			  <?php

		       			if(isset($_SESSION['error'])){
		       				unset($_SESSION['error']); 
		       				echo "Username dan password yang Anda masukkan salah.";
		       			}
	       						       			
		       		?>
              <div>
				<button class="btn btn-primary" type="reset">Reset</button>
                <input type="submit" value="Login" class="btn btn-primary"></button>
              </div>
			  </form>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i>SeL</h1>
                  <p>©2017 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>