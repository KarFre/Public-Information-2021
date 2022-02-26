<!DOCTYPE html>
<html lang="en">
<!--
    ACCESS POINTS PAGE
-->
<head>
    <?php include("helper/head.php");
    session_start(); ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Rakkas&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/access-points.css">
</head>

<body>

    <?php include("helper/navbar.php");
    require_once("../model/access_point.php"); ?>
 <h1 class="big-header card" style="font-family:Fondamento, cursive;">Access Points</h1>
    <div class="container panel panel-default" style="padding: 20px; width: 100%;">
        <div class="well" style="border: none;">
            <div class="row">
                <div class="col-md-6 text-center"><br><br><br>
                    <h4>Do you know of an access point we don't have?</h4>
                    <a href="suggestion.php" role="button" class="btn btn-lg btn-warning">Send a Suggestion</a>
                </div>
                <div class="col-md-6 ">
                    <br><br>
                    <h4>How to Use:</h4>
                    <p>Search and sort the table below to find an access
                       point near your location.</p>
                    <p>Internet Access Key:</p>
                    <ul class="informal-list">
                        <li>Y: Yes</li>
                        <li>N: No </li>
                        <li>I: Unknown </li>
                    </ul>
                </div>
            </div>
        </div><!--end of title panel-->
        <div class="col-md-12" style="overflow-x: auto">
        <div class="panel-body row p-2">

            <!--Removed display class-->
            <table id="accessPoint" class="table-style" style="width:98%;">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Internet Acess</th>
                        <th>Type</th>
                        <th>Address</th>
                        <th>District</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $accessPoint = new Access_Point();

                    $point = $accessPoint->listPoint();

                    foreach ($point as $key => $value) {
                        $title = $value['title'];
                        $description = $value['description'];
                        $internetAcess = $value['internet_access'];
                        $type = $value['type'];
                        $adress = $value['adress'];
                        $district = $value['district'];
                        $city = $value['city'];
                        $state = $value['state'];
                        $country = $value['country'];

                        echo "
                        <tr>
                            <td>$title</td>
                            <td>$description</td>
                            <td>$internetAcess</td>
                            <td>$type</td>
                            <td>$adress</td>
                            <td>$district</td>
                            <td>$city</td>
                            <td>$state</td>
                            <td>$country</td>
                         </tr>";
                    }


                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Internet Acess</th>
                        <th>Type</th>
                        <th>Adress</th>
                        <th>District</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Country</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>

        <!-- Daqui pra baixo só acessa se for ADM !-->

        <div class="panel-group hide" id="accordionmaster">
        </br></br>
            <div class="text-center">
                <h2>
                    <span> Admin  Space </span>
                </h2>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Insert New accessPoint</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <form action="../controller/ControllerAccessPoint.php" method="post" id="form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Title</label>
                                    <input required type="text" class="form-control" name="txttitle" placeholder="Write Title">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Internet Access</label>
                                    <select required name="internetA" class="form-control">
                                        <option value="">Select Internet Access </option>
                                        <option value="Y">Y - Yes</option>
                                        <option value="N">N - No</option>
                                        <option value="I">IDK - I don't know</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Type of Access Point</label>
                                    <select class="form-control" name="type" required>
                                        <option value="">Select Type</option>
                                        <?php
                                        $type = new Type();
                                        foreach ($type->listType() as $key => $line) { ?>
                                            <option value="<?php echo $line['idtypes'] ?>"><?php echo $line['type'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Description</label>
                                    <textarea required class="form-control" name="descrip" rows="3" placeholder="Write description, could be phone, user tips, landmarks"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <h3 class="text-center">INSERT ADRESS</h3>
                                    <hr>
                                    <div class="form-group col-md-4">
                                        <label>Coutry</label>
                                        <input required type="text" class="form-control" name="txtCountry" placeholder="Country">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>State</label>
                                        <input required type="text" class="form-control" name="txtState" placeholder="State">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>City</label>
                                        <input required type="text" class="form-control" name="txtCity" placeholder="City">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label>Adress</label>
                                        <input required type="text" class="form-control" name="txtAdress" placeholder="Adress complete and number">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>District</label>
                                        <input required type="text" class="form-control" name="txtDistrict" placeholder="District">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-offset-5 ">
                                    <input type="hidden" value="1" name="pointOp">
                                    <button required class="btn btn-md btn-primary" type="submit">Finish and Save Access Point</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Delete Access Point</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="container">
                            <form class="form-inline" action="../controller/ControllerAccessPoint.php" method="post">
                                <label>Inform <b>'IdAccessPoint and IdLocation'</b> to delete AccessPoint:</label>
                                <input type="number" name="idPoint" placeholder="Num of Id AccessPoint    ">
                                <input type="number" name="idLoc" placeholder="Num of Id Location">
                                <input type="hidden" value="2" name="pointOp">
                                <input class="btn btn-danger" type="submit" value="Delete Access Point">
                            </form>
                            <br>
                        </div>
                        <table id="accessPoint2" class="display" style="width:90%">
                            <thead>
                                <tr>
                                    <th>IdAccessPoint</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Internet Acess</th>
                                    <th>Type</th>
                                    <th>IdLocation</th>
                                    <th>Adress</th>
                                    <th>District</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $accessPoint = new Access_Point();

                                $point = $accessPoint->listPoint();
                                foreach ($point as $key => $value) {
                                    $idpoint = $value['idaccess_point'];
                                    $title = $value['title'];
                                    $description = $value['description'];
                                    $internetAcess = $value['internet_access'];
                                    $type = $value['type'];
                                    $idLoc = $value['idlocation'];
                                    
                                    $adress = $value['adress'];
                                    $district = $value['district'];
                                    $city = $value['city'];
                                    $state = $value['state'];
                                    $country = $value['country'];

                                    echo "
                                        <tr>
                                            <td>$idpoint</td>
                                            <td>$title</td>
                                            <td>$description</td>
                                            <td>$internetAcess</td>
                                            <td>$type</td>
                                            <td>$idLoc</td>
                                            <td>$adress</td>
                                            <td>$district</td>
                                            <td>$city</td>
                                            <td>$state</td>
                                            <td>$country</td>
                                        </tr>";
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>IdAccessPoint</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Internet Acess</th>
                                    <th>Type</th>
                                    <th>IdLocation</th>
                                    <th>Adress</th>
                                    <th>District</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("helper/footer.php") ?>
    <script>
        $(document).ready(function() {
            $('#accessPoint').DataTable();
        });
        $(document).ready(function() {
            $('#accessPoint2').DataTable();
        });

        //php retorna a variavel session se tiver algo dentro senao retorna null
        let userType = "<?php if (isset($_SESSION['userType']) == true) {
                            echo $_SESSION['userType'];
                        } else echo null;
                        ?>";

        if (userType == 'A') { //se for adm mostro op adm
            document.getElementById('accordionmaster').classList.remove('hide');
        }
    </script>
</body>

</html>