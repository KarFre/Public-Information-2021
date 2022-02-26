<!DOCTYPE html>
<html lang="en">
<!--
    About the team page
-->
<head>
    <?php include("helper/head.php");
    session_start(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Rakkas&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/page-styles.css">
</head>

<body>
    <?php include("helper/navbar.php") ?>



    <div class="container panel panel-default">
        <div class="panel-body">
            <div class="card">
                <h2 style="font-family:'Fondamento',cursive, sans-serif;" class="big-header text-center"><b>About Us</b></h2>
                <h4>
                    <br></br>
                    This website was developed by a team of students from the Federal University of Uberlândia
                    and Middle Tennessee State University. The team aimed to help solve the United Nations' 17 sustainable
                    Development goals, specifically Goal #5: Gender Inequality, by offering information on 
                    citizen's rights and points of accessibility. 
                </h4>

            </div>
            <!-- 
                Criando seção dos parceiros com seus respectivos tamanhos de colunas    
            !-->
                <div class="container-fluid text-center margin ">
                    <h1 style="font-family:Fondamento,cursive;" class="margin">Developers</h1>
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="img/gess.jpg" width="64%" class="img-circle">
                                <br>
                                <h4 class="dev-title"><b>Géssica Santos</b></h4>
                                <p>Backend Development</p>
                                <div style="padding: 8px;" class="btn-group">
                                    <a class="btn btn-warning" href="https://github.com/GessicaS0" target="_blank">Github</a>
                                    <a class="btn btn-warning" href="https://www.linkedin.com/in/g%C3%A9ssica-santos-47b7911b3/" target="_blank">Linkedin</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <img src="img/ph.jpg" width="64%" class="img-circle">
                                <br>
                                <h4 class="dev-title"><b>Phelipe Rodovalho</b></h4>
                                <p>Backend Development</p>
                                <div style="padding: 8px;" class="btn-group">
                                    <a class="btn btn-warning" href="https://github.com/phRodovalho" target="_blank">Github</a>
                                    <a class="btn btn-warning" href="https://www.linkedin.com/in/phelipe-rodovalho-ufu/" target="_blank">Linkedin</a>
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="img/josalyn.png" width="64%" class="img-circle">
                                <br>
                                <h4 class="dev-title"><b>Josalyn Mandujano Cervantes</b></h4>
                                <p>Frontend Development</p>
                                <div style="padding: 8px;" class="btn-group">
                                    <a class="btn btn-warning" href="https://github.com/JosalynMC" target="_blank">Github</a>
                                    <a class="btn btn-warning" href="https://www.linkedin.com/in/josalyn-mandujano-088b38226/" target="_blank">Linkedin</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <img src="img/karmenfreeman.jpg" width="64%" class="img-circle">
                                <br>
                                <h4 class="dev-title"><b>Karmen Freeman</b></h4>
                                <p>Frontend Development</p>
                                <div style="padding: 8px;" class="btn-group">
                                    <a class="btn btn-warning" href="https://github.com/KarFre" target="_blank">Github</a>
                                    <a class="btn btn-warning" href="https://www.linkedin.com/in/karmen-freeman-0b5baa151/" target="_blank">Linkedin</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="img/kasie.jpg" width="64%" class="img-circle">
                                <br>
                                <h4 class="dev-title"><b>Kasie Barber</b></h4>
                                <p>Frontend Development</p>
                                <div style="padding: 8px;" class="btn-group">
                                    <a class="btn btn-warning" href="https://github.com/Kbarber99" target="_blank">Github</a>
                                    <a class="btn btn-warning" href="https://www.linkedin.com/in/kasie-barber-artist/" target="_blank">Linkedin</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <img src="img/hayden.jpg" width="64%" class="img-circle">
                                <br>
                                <h4 class="dev-title"><b>Hayden Rumpf</b></h4>
                                <p>Frontend Development</p>
                                <div style="padding: 8px;" class="btn-group">
                                    <a class="btn btn-warning" href="https://github.com/Hmr4d" target="_blank">Github</a>
                                    <a class="btn btn-warning" href="#" target="_blank">Linkedin</a>
                                </div>
                            </div>
                        </div>
                        <div class="row centering">
                            <div class="col-md-6">
                                <img src="img/christopher.jpg" width="64%" class="img-circle">
                                <br>
                                <h4 class="dev-title"><b>Christopher Andrews</b></h4>
                                <p>Frontend Development</p>
                                <div style="padding: 8px;" class="btn-group">
                                    <a class="btn btn-warning" href="https://github.com/cda5b" target="_blank">Github</a>
                                    <a class="btn btn-warning" href="#" target="_blank">Linkedin</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            

        </div>
    </div>

    <?php include("helper/footer.php") ?>


</body>

</html>