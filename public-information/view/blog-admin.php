<!DOCTYPE html>
<html lang="en">
<!--
    This page displays when the admin clicks on blog-admin in the navbar, 
    which shows up when an admin is logged in. Lets the admin add posts.
-->
<head>
    <?php include("helper/head.php");
    session_start();  ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Rakkas&display=swap" rel="stylesheet">
</head>

<body>
    <?php include("helper/navbar.php");?>

    <div class="container">
        <h2 class="big-header">Admin Posts</h2>

        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Create Post</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="btn-group">
                            <a href="blog-new-post.php" class="btn btn-warning">Write a new post!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Delete Post</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="container">
                            <form class="form-inline" action="../controller/ControllerPost.php" method="post">
                                <label>Inform <b>'IdPost'</b> to delete post:</label>
                                <input type="number" name="idPost">
                                <input type="hidden" value="3" name="postOp">
                                <input class="btn btn-danger" type="submit" value="Delete Post">
                            </form>
                            <br>
                        </div>
                        <table id="post" class="display" style="width:98%">
                            <thead>
                                <tr>
                                    <th>IdPost</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date Hour</th>
                                    <th>Likes</th>
                                    <th>Category</th>
                                    <th>User Name</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                require_once("../model/post.php");
                                $post = new Post();

                                $posts = $post->listAllPost();

                                foreach ($posts as $key => $value) {
                                    $idpost = $value['idpost'];
                                    $title = $value['title'];
                                    $description = $value['description'];
                                    $date = $value['date'];
                                    $like = $value['likes'];
                                    $category = $value['category'];
                                    $name = $value['name'];

                                    echo "
                                            <tr>
                                                <td>$idpost</td>
                                                <td>$title</td>
                                                <td>$description</td>
                                                <td>$date</td>
                                                <td>$like</td>
                                                <td>$category</td>
                                                <td>$name</td>
                                                
                                            </tr>";
                                }
                                ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>IdPost</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date Hour</th>
                                    <th>Likes</th>
                                    <th>Category</th>
                                    <th>User Name</th>
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
            $('#post').DataTable();
        });
    </script>
</body>

</html>