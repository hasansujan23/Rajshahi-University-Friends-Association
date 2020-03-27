<?php
/**
 * Created by PhpStorm.
 * User: SUJAN HASAN
 * Date: 11/24/2018
 * Time: 9:05 PM
 */
?>
<?php
include 'header.php';
include 'lib/config.php';
include 'lib/mydatabase.php';
$db=new Database();
$pId=$_GET['pid'];

$updateCount="update t_post set pcount=pcount+1 where pid='$pId'";
$updateResult=$db->getExecute($updateCount);
$postQuery="select pid,ptitle,content,pcount,DATE_FORMAT(pdate, \"%M %d %Y\") as pdate,url from t_post where pid='$pId'";
$result=$db->getAll($postQuery);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <div class="panel panel-default" style="margin-top: 20px;padding: 10px;">
                    <div class="panel-heading"><?php echo $row['pdate'];?></div>
                    <div class="panel-body">
                        <img class="img-thumbnail"
                             src="<?php echo $row['url'];?>" alt=""
                             style="height: 350px;width: 100%;">
                    </div>
                    <div class="panel-footer">
                        <h3 class="text-warning"><?php echo $row['ptitle'];?></h3>
                        <p class="text-muted"><?php echo $row['content'];?></p>
                        <h5 class="text-danger text-right" style="padding: 10px;"><?php echo $row['pcount'];?> views </h5>
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