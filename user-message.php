<?php
/**
 * Created by PhpStorm.
 * User: SUJAN HASAN
 * Date: 11/6/2018
 * Time: 9:00 PM
 */
?>

<?php
include 'lib/config.php';
include 'lib/mydatabase.php';

$db=new Database();

if(isset($_GET['u_id'])){
    $userId=$_GET['u_id'];
    $deleteMessage="delete from t_user_message where id='$userId'";
    $deleteResult=$db->getExecute($deleteMessage);
    if ((string)$deleteMessage=='1'){
        header("Location: user-message.php");
    }
}

$messageQuery="select * from t_user_message order by id desc";
$messageResult=$db->getAll($messageQuery);

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
                <a href="post.php">Post</a>
            </li>
            <li>
                <a href="user-message.php" id="active">Message</a>
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
            <h1>Welcome Admin</h1>
            <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
            <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">Toggle Menu</a>
        </div>
        <div class="container-fluid" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-info">User Messages</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Activity</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row1=mysqli_fetch_assoc($messageResult)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row1['name'];?></td>
                                        <td><?php echo $row1['email'];?></td>
                                        <td><?php echo $row1['subject'];?></td>
                                        <td><?php echo $row1['content'];?></td>
                                        <td>
                                            <a class="btn btn-danger" href="user-message.php?u_id=<?php echo $row1['id'];?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
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

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>

