<!DOCTYPE html>
<html lang="en">
<!--
    Main home page for blog. 
-->
<head>
    <?php include("helper/head.php");
    session_start(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Rakkas&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include("helper/navbar.php");
    require_once("../model/post.php");
    require_once("../model/banco.php");

    if (!isset($_SESSION['idUser'])) {
        echo '  
        <div class="flex-wrapper">
        <div class="container">
        <div class="panel panel-default text center">
            <div class="panel-body">
            <h3>To access the blog, you must login or create an account.</h3>
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


    <div class="container">
        <div class="row">
            <div class="leftcolumn">
                <?php
                $post = new Post();
                //for pagination
                if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
                    $page_no = $_GET['page_no'];
                } else {
                    $page_no = 1;
                }
                //Start - Insane calc of pagination
                $total_records_per_page = 4; //num of post per page
                $offset = ($page_no - 1) * $total_records_per_page;
                $previous_page = $page_no - 1;
                $next_page = $page_no + 1;
                $adjacents = "2";

                $total_records = $post->countPosts();
                $total_no_of_pages = ceil($total_records / $total_records_per_page);
                $second_last = $total_no_of_pages - 1; // total page minus 1
                //Finish calc of pagination

                $all = $post->list($total_records_per_page, $offset);

                foreach ($all as $key => $value) {
                    $dt = date_create($value['date']); //criando obj tipo data para formatar 

                    if (strlen($value['description']) > 500) {
                        $descr = strip_tags($value['description']);
                        $d =  substr($descr, 0, 500);
                    } else $d = $value['description'];

                    echo '<div class="card">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="text-center">' . strtoupper($value['title']) . '</h2>
                                <hr>
                                <h5>
                                    <div class="row">
                                        <div class="col-sm-11 text-left"><b>' . date_format($dt, 'H:i:s  l, d-m-Y') . '</b></div>
                                        <div class="col-sm-1">
                                            <i class="fas fa-heart"></i> <span id="like-' . $value['idpost'] . '"> ' . $value['likes'] . '</span>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                            <div class="panel-body">
                                <p>
                                ' . $d /*description*/ . '
                                </p>
                            </div>
                            <div>
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group">
                                        <form method="get" action="blog-post-page.php">
                                            <input type="hidden" name="idpost" value="' . $value['idpost'] . '">
                                            <button id="comment" type="submit" class="btn btn-warning"> <i class="fas fa-comment-alt" style="padding-right: 5px;"></i> Comment | Read More</button>
                                        </form>
                                    </div>
                                    <div class="btn-group">
                                        <button data-post-id="' . $value['idpost'] . '" type="button" class="btn btn-warning tipolikeid"><i class="fas fa-heart" style="padding-right: 5px;"></i> Like</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
                ?>
                <?php include("helper/pagination.php") ?>

                <script type="text/javascript">
                    $(function() {
                        $(".tipolikeid").click(function() {
                            postID = $(this).attr("data-post-id");
                            $.ajax({
                                method: "post",
                                url: "../controller/ControllerPost.php",
                                data: {
                                    idPost: postID,
                                    postOp: "2",
                                },
                                success: function(retorno) {
                                    $("#like-" + postID).html(retorno);
                                }
                            })
                        });
                    });
                </script>
            </div>

            <div class="rightcolumn">
                <div class="card text-center">
                    <h2>Popular Posts</h2>
                    <?php
                    $all = $post->listPopular();

                    foreach ($all as $key => $value) {
                        echo '
                        <div class="panel panel-default">
                            <div class=" panel-heading">
                                <div class="row">
                                    <div class="col-sm-10"><h5 class="text-center" style="text-size-adjust: auto;">
                                        ' . strtoupper($value['title']) . '
                                        </h5>
                                    </div>
                                    <div class="col-sm-1">
                                        <i class="fas fa-heart"></i>' . $value['likes'] . '
                                    </div>
                                </div>
                                <div class="row">
                                    <form method="get" action="blog-post-page.php">
                                        <input type="hidden" name="idpost" value="' . $value['idpost'] . '">
                                        <button type="submit" class="btn btn-warning btn-sm" style="padding:5px">Read</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>';
                    }
                    ?>
                </div>
                <div class="card text-center">
                    <h2>Suggestions</h2>
                    <div class="panel panel-default">
                        <p class="text-justify bg-warning" style="padding: 10px;">
                        Do you have a suggestion for our blog, new access points, or other improvements?
                        </p>
                        
                        <div class=" panel-body">
                            <a href="suggestion.php" class="btn btn-block btn-warning" role="button">
                                Send a Suggestion
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <h2>About the Team</h2>
                    <div class="panel panel-default">
                        <p class="bg-warning" style="padding: 10px;">Do you enjoy our work? Follow our other projects!</p>

                        <div class=" panel-body">
                            <a href="about.php" class="btn btn-block btn-warning" role="button">
                                Follow us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("helper/footer.php") ?>
</body>

</html>