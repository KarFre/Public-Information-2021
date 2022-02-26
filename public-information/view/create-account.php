<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("helper/head.php");
    session_start();
    require_once("../model/user.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Rakkas&display=swap" rel="stylesheet">
</head>

<body>
    <?php include("helper/navbar-login.php") ?>
    <div class="container panel panel-default" style=" margin-top: 70px;">
        <div class="panel-body card">
            <div class="text-center">
                <h2 class="big-header" style="font-family: Fondamento, cursive">Create an Account</h2>
                <hr style="height:1px;background-color:gray">
            </div>
            <form action="../controller/ControllerUser.php" method="post" id="form">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Name</label>
                        <input required type="text" class="form-control form-style" name="txtname" placeholder="First and Last name">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Birth Date</label>
                        <input required type="date" class="form-control" name="txtdate">
                    </div>
                    <div class="form-group col-md-3">
                        <label>User Type</label>
                        
                        <select required name="userType" class="form-control">
                            <option value="P">Default User</option>
                            <option value="A">Administrator</option>
                            <option value="W">Blog Writer</option>
                        </select>
                        <small class="text-muted">
                        You may choose the user type for educational purposes, but in a real scenario the admin users would be registered directly in the database and the writer users would be invited by the admin.
                        </small>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input required type="email" class="form-control form-style" name="email" id="inputEmail" placeholder="name@example.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Confirm Email</label>
                        <input required type="email" class="form-control form-style" name="emailC" id="inputEmailC" placeholder="name@example.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Password</label>
                        <input required type="password" class="form-control form-style" name="password" id="inputPassword">
                        <small id="passwordHelpInline" class="text-muted">
                            Must be 8-20 characters.
                        </small>
                    </div>
                    <div class="form-group col-md-6">
                        <label> Confirm Password</label>
                        <input required type="password" class="form-control form-style" name="passwordC" id="inputPasswordC">
                        <small id="passwordHelpInline" class="text-muted">
                            Must be 8-20 characters.
                        </small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <h3 class="text-center">Enter your Address (Optional)</h3>
                        <hr>
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
                    <div class="form-group">
                        <input type="hidden" value="1" name="userOp">
                        <button class="btn btn-block btn-warning btn-lg" type="submit">Create account</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include("helper/footer.php") ?>
    <!--<script src="js/validateEmail-Password.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#submit").click(function(event){
                event.preventDefault();
                if(validatePassword() == true && validateEmail() == true){
                    $("form").submit();
                }
            });
        });
        function validatePassword() {
            let pass = document.getElementById("InputPassword").value;
            let passC = document.getElementById("InputPasswordC").value;
            if ( pass == passC) {
                input.setCustomValidity('');
                return true;
            } else {
                input.setCustomValidity('Password are not the sam, please try again!');
                return false;
                
            }
        }
        function validateEmail() {
            if (document.getElementById("InputEmailC").value == document.getElementById("InputEmail").value) {
                input.setCustomValidity('');
                return true;
            } else {
                input.setCustomValidity('Emails are not the sam, please try again!');
                return false;
                
            }
        }
    </script>!-->
</body>

</html>