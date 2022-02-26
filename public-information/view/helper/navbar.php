 <!--------------------------- Barra menu superior !--------------------------->
 <!--Main navbar
     Left to do:
     - Make different brand logo 
     - Change login-out area to be unique/stand out
-->
 <nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container-fluid">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="landing.php">
                 <img src="img/public-info-logo.png" style="max-width:200px; margin-top: -7px;">
             </a>
         </div>
         <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav">
                 <li><a href="landing.php">Home</a></li>
                 <li><a href="home.php">Access Points</a></li>
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="how-to-help.php">Take Action <span class="caret"></span></a>
                    <ul class="dropdown-menu text-center">
                        <li><a href="how-to-help.php">How to Help</a></li>
                        <li><a href="donate.php">Donate</a></li>
                        <li><a href="suggestion.php">Suggestions</a></li>
                    </ul>
                 </li>
                 <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="blog-home.php">Blog <span class="caret"></span></a>
                     <ul class="dropdown-menu text-center">
                         <li><a href="blog-home.php">Blog Home</a></li>
                         <?php
                            if (isset($_SESSION['userType']) && $_SESSION['userType'] != 'P') {
                                echo '<hr style="height:1px;background-color:ligth-gray; padding:0px; margin:5px;">';
                                echo '<li><a href="blog-admin.php">Admin Blog</a></li>';
                            }
                            ?>
                     </ul>
                 </li>
                 <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="about.php">About<span class="caret"></span></a>
                     <ul class="dropdown-menu text-center">
                         <li><a href="about.php">About the Team</a></li>
                         <li><a href="un-goals.php">UN Sustainability Goal</a></li>
                     </ul>
                 </li>
             </ul>
             <ul class="nav navbar-nav navbar-right">
                 <?php
                    if (isset($_SESSION['nameUser']) == true) { //se tem usuário setado
                        if ($_SESSION['userType'] == 'P' || $_SESSION['userType'] == 'W') { //se usuario é padrão não habilita crud de admin
                            echo '<li><a><i class="fas fa-user" style="padding-right: 5px"></i>' . $_SESSION['nameUser'] . '</b></a></li>';
                            echo '<li><a href="logout.php"><i class="fas fa-sign-out-alt" style="padding-right: 5px"></i> <b>Logout</b></a></li>';
                        } else { //usuário admin
                            echo '<li><a href="adminUser.php"><i class="fas fa-user" style="padding-right: 5px"></i> ' . $_SESSION['nameUser'] . '</b></a></li>';
                            echo '<li><a href="logout.php"><i class="fas fa-sign-out-alt" style="padding-right: 5px"></i> <b>Logout</b></a></li>';
                        }
                    } else echo '<li><a href="login.php"><i class="fas fa-user" style="padding-right: 5px"></i> Sign in</a></li>';
                    ?>
                 <!-- <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Sing in or <b>Create Account</b></a></li>
                    !-->
             </ul>
         </div>
     </div>
 </nav>

 <!--------------------------- FIM Barra menu superior !--------------------------->
 <!--
 <div class="header">
     <img src="img/header-logo.png" style="width: 100%; height: 250px">
 </div>
                -->
<div class="header">
                </br></br></br></br>
</div>
