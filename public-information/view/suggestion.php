<!DOCTYPE html>
<html lang="en">
<!--
    Where users can leave suggestions
-->
<head>
    <?php include("helper/head.php");
    session_start(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Rakkas&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/page-styles/css">
</head>


<body>
    <?php include("helper/navbar.php");
    
    if(!isset($_SESSION['idUser'])){
        echo '
        <div class="flex-wrapper">  
        <div class="container">
          <div class="panel panel-default text center" style="rgba(255, 255, 255, 0.15);">
              <div class="panel-body">
              <h3>To send suggestions, you must login or create an account.</h3>
              <a href="login.php" class="text-center btn btn-lg btn-warning">Sign in or Create an account </a>
              </div>
              </div>
              
          </div>
          <footer style="margin-bottom: 0px;">
          <p>Copyright 2021 for UFU and MTSU</p>
          </footer>
          </div>';
          
          exit();
      }
      ?>
<h1 class="big-header card">
                Send a Suggestion
            </h1>
    <div class="container panel panel-default" style="color: black; width: 90%">
    
        <form method="post" action="../controller/ControllerSuggestion.php">

            <div class="form-group">
                <div class="form-row">
                    <h2>Suggestion</h2>
                    <textarea required class="form-control" name="suggestionDescrip" rows="3" placeholder="Enter your suggestion here"></textarea>
                    <!--
                pt-br: habilitando o campo de sugestão
                en : enabling the sugestion field
                !-->
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <hr>
                    <h2>Insert Address (optional)</h2>
                    <div class="form-group col-md-4">
                        <label>Country</label>
                        <input type="text" class="form-control form-style" name="txtCountry" placeholder="Country">
                    </div>
                    <div class="form-group col-md-4">
                        <label>State</label>
                        <input type="text" class="form-control form-style" name="txtState" placeholder="State">
                    </div>
                    <div class="form-group col-md-4">
                        <label>City</label>
                        <input type="text" class="form-control form-style" name="txtCity" placeholder="City">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label>Address</label>
                        <input type="text" class="form-control form-style" name="txtAdress" placeholder="Address">
                    </div>
                    <div class="form-group col-md-4">
                        <label>District</label>
                        <input type="text" class="form-control form-style" name="txtDistrict" placeholder="District">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-offset-5 ">
                    <button class="btn btn-lg btn-warning" type="submit">Send Suggestion</button>
                </div>
            </div>
        </form>
    </div>
    <?php include("helper/footer.php") ?>
</body>

</html>