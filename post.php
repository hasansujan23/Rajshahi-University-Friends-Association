<?php
include 'lib/config.php';
include 'lib/mydatabase.php';
//session_start();
//if(!isset($_SESSION['authenticateUser'])){
//    header("Location: login.php");
//}
//
//$authenticateUser=$_SESSION['authenticateUser'];
$db=new Database();

if(isset($_POST['submit'])){

    $fileName=$_FILES['image_file']['name'];
    $tempLoc=$_FILES['image_file']['tmp_name'];
    $directory='images/post-image/';
    $imgUrl=$directory.$fileName;

    $fileType=pathinfo($imgUrl,PATHINFO_EXTENSION);
    $check=getimagesize($tempLoc);

    if ($check>0) {
        if (file_exists($imgUrl)) {
            die('This file already exists....');
        }else{
            if ($fileType!='jpg' && $fileType!='png') {
                die('File not supported. Please chose jpg or png file');
            }else{
                move_uploaded_file($tempLoc, $imgUrl);
                $title=$_POST['title'];
                $content=$_POST['content'];
                $postCount=0;
                $sql="insert into t_post(ptitle,content,pcount,pdate,url) values('$title','$content','$postCount',current_timestamp(),'$imgUrl')";
                //mysqli_query($link,$sql);
                $row=$db->getExecute($sql);
                if($row>0){
                    header("Location: admin-panel.php");
                }
            }
        }
    }else{
        $error="Please enter the image file!";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Start Bootstrap
                </a>
            </li>
            <li>
                <a href="admin-panel.php" class="">Users</a>
            </li>
            <li>
                <a href="#" id="active" id="active">Post</a>
            </li>
            <li>
                <a href="user-message.php">Message</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="edit-profile.php">Edit Profile</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>Welcome </h1>
            <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
            <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">Toggle Menu</a>
        </div>
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Input image file</label>
                                    <input type="file" class="form-control-file" name="image_file" required>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="ckeditor form-control" name="content" required> </textarea>
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary" value="POST">
                            </form>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
