<!DOCTYPE html>
<html lang="en">
<!--
    Login form
-->
<head>
  <?php include("helper/head.php") ?>
  <link rel="stylesheet" type="text/css" href="css/style-login.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Rakkas&display=swap" rel="stylesheet">
</head>

<body>
  <?php 
  session_start();
  include("helper/navbar-login.php");
  ?>

  <div class="container flex-wrapper">
    <div class="row thera">
        <h1 class="text-center big-header" style="font-family: 'Fondamento', cursive, sans-serif;">Sign In</h1>
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <img class="profile-img" src="img/img_avatar.png" alt="">
                <form class="form-signin" method="post" action="../controller/ControllerUser.php">
                    <input type="text" class="form-control form-style" name="email" placeholder="Email" required autofocus><br>
                    <input type="password" class="form-control form-style" name="password" placeholder="Password" required>
                    <input type="hidden" value="2" name="userOp">
                    <button class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>
                </form>
            </div>  
        </div>
        <br><br><br>
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <h3 class="text-center login-title">Don't have an account?</h3>
                <a href="create-account.php" class="text-center new-account btn btn-lg btn-warning btn-block">Create an account </a>
            </div>  
        </div>
    </div>
  </div>
  <?php include("helper/footer.php") ?>
</body>

</html>