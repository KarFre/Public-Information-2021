<!DOCTYPE html>
<!--
    HOME PAGE; EFFECTIVELY INDEX.HTML
-->
<html lang="en">
    <head>
        <?php include("helper/head.php");
        session_start(); ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Rakkas&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/landing.css" />
    </head>
    <body>
        <header>
        <?php include("helper/navbar.php") ?>
        </header>
        <!--Start of main container-->
        <div class="container">
            <!--Hero content-->
            <div class="hero-image"> 
                <div class="hero-caption">
                    <caption>Photo by <a href="https://unsplash.com/@jaimespaniol?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Jaime Spaniol</a> on <a href="https://unsplash.com/s/photos/brazil-landscape?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                    <caption>
                </div>   
                <div class="hero-text col-xs-12 col-sm-6">
                    <h1>Welcome to Public Information</h1>
                    <p style="font-size: 18px;">
                    This website is dedicated to reducing inequalities by providing information
                    to the public. Whether you are looking to help reduce inequalities or 
                    are the one in need, Public Information is here to help.
                    </p>
                     <a href="how-to-help.php" 
                       role="button" 
                       class="btn btn-lg btn-warning btn-default button-styling">Help Now</a>
                </div>
            </div>
            <br><br>
            <!--Start of article panels-->
            <div class="container row centered justify-content-around">
                <div class="panel panel-default col-sm-6">
                    <div class="margin-fix">
                    <h2 class=card>Access Points</h2><br>
                    <h4><b>What are access points?</b></h4>
                    <p>
                        Access points are locations of interest in our database that people
                        in need may find useful. These access points may include locations with 
                        free internet, computer access, study spaces, and much more! 
                    </p>

                    <h4><b>How do I find an access point?</b></h4>
                        <p>
                            Finding an access point is simple: press the button below to find
                            a table of all the access points in our database. From there, you can
                            search and sort the table to find access points near you!
                        </p>
                        <p>
                            Our database depends on user feedback: if you know about an access
                            point in your region or would like use to add more points for your location,
                            send us a <a href="suggestion.php">suggestion.</a>
                        </p><br>
                        <a href="home.php" role="button" class="btn btn-block btn-lg btn-warning">Search Access Points</a>
                    </div>
                </div>
                <div class="panel panel-default col-sm-6">
                    <div class="margin-fix">
                    <h2 class="card">Help Others</h2><br>
                    <p>
                        Do you want to reduce inequalities, but don't know how to help or where to begin?
                        Public Information has compiled a <a href="how-to-help.php">quick guide</a> on how to help reduce inequalities, 
                        along with a few more resources.
                    </p>
                    <h4><b>What if I don't have time to help?</b></h4>
                        <p>
                            While being an active member in your community is one way to help others, this is not
                            the only way. If you have money to spare, there are many organizations that accept donations.
                            We have created a short list of organizations that are dedicated to reducing inequality.
                            Don't stop there, of course; there are many other organizations out there.
                        </p><br>
                        <a href="donate.php" role="button" class="btn btn-block btn-lg btn-warning">Donate</a>
                        </div>
                </div>
            </div>
            <!--End of row 1 of articles-->
            <div class="container row centered">
            <div class="panel panel-default col-md-4">
                <div class="margin-fix">
                    <h3 class="card">Contributions and More</h3><br>
                    <p>
                        <b>Public Information can give you more with an account!</b>
                    </p>
                    <p>When you sign up for an account, you gain access to our blog,
                        which is updated regularly with information on citizen's right and 
                        free classes in Brazil.
                    </p>
                    <p>
                        As a Public Information account holder, you can make suggestions
                        for more access points, blog posts, and more! We greatly appreciate any user contributions 
                        to help our site grow. 
                    </p><br>
                    <a href="login.php" role="button" class="btn btn-block btn-lg btn-warning">Create an Account</a>
                </div>
                </div>
                <div class="panel panel-default col-md-4">
                <div class="margin-fix">
                    <h3 class="card">Our Mission</h3>       
                    <p>Public Information was created by a joint team of UFU and MTSU students in accordance with UN Sustainability Goal #5:
                        Gender Equality. <a href="about.php">Our team</a> developed this website to give people free access to information as a
                        way to combat inequalites, with a focus on Brazil. 
                    </p>
                    <p>
                        If you would like more information on either of these universities, you can find information
                        on them to the right or below. If you would like to learn more about UN Sustainability Goal #5, you
                        may press the button below. 
                    </p>
                    <a href="un-goals.php" role="button" class="btn btn-block btn-lg btn-warning">UN Sustainability Goals</a>
                </div>
                </div>
                <div class="panel panel-default col-md-4">
                <div class="margin-fix">
                    <img class="responsive"src="img/sao-paulo.jpg"height="300px" width="100%"> 
                        <div class="img-text text-center">
                            <a href="https://www.mtsu.edu/" target="_blank"><h2>Learn about MTSU</h2></a>
                            <a href="https://ufu.br/" target="_blank"><h2>Learn about UFU</h2></a>
                        </div>
                    </a>
                    <caption>Photo by <a href="https://unsplash.com/@vinilowraw?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Vinicius Löw</a> on <a href="https://unsplash.com/s/photos/brazil?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></caption>
                </div>
                </div>
                
                
            </div>
            <!--End of row 2 of articles-->
            <!--End of article panels-->
        </div>
        <!--End of main container-->
       
        <?php include("helper/footer.php") ?>
        
    </body>
</html>