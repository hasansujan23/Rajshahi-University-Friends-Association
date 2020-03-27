<?php
/**
 * Created by PhpStorm.
 * User: SUJAN HASAN
 * Date: 11/24/2018
 * Time: 11:05 AM
 */
?>

<?php
include 'header.php';
include 'lib/config.php';
include 'lib/mydatabase.php';
$db=new Database();

$query1="select * from v_social";
$result=$db->getAll($query1);
?>
<style>
    .box{
        transition:1s;

    }
    .box:hover{
        transform:scale(1.1);
        box-shadow:-2px 2px 2px #333;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding: 15px;">
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-3 anim5" style="margin-top: 10px;">
                    <div class="panel panel-default box">
                        <div class="panel-body">
                            <center><img class="img-thumbnail img-circle" src="<?php echo $row['img'];?>" alt="">
                            </center>
                        </div>
                        <div class="panel-footer">
                            <h4 class="text-muted text-center"><?php echo $row['f_name']." ".$row['l_name'];?></h4>
                            <h6 class="text-center text-muted"><?php echo $row['dept'];?></h6>
                            <a class="btn btn-block btn-primary" href="profile.php?user_id=<?php echo $row['user_id'];?>">View Profile</a>
                        </div>
                    </div>
                </div>
                <?php
            }
                ?>
        </div>
    </div>
</div>












<?php
include 'footer.php';
?>