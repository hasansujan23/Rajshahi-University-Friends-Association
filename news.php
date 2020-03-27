<?php
include 'header.php';
include 'lib/config.php';
include 'lib/mydatabase.php';

$db=new Database();
$postQuery="select pid,ptitle,content,pcount,DATE_FORMAT(pdate, \"%M %d %Y\") as pdate,url from t_post";
$result=$db->getAll($postQuery);
?>

    <style>
        .box{
            transition:1s;

        }
        .box:hover{
            transform:scale(1.03);
        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding: 15px;display:table;">
                <?php
                while ($row=mysqli_fetch_assoc($result)) {
                    $postContent=$row['content'];
                    $length=strlen($postContent);
                    $post="";
                    if($length>500){
                        for ($i=0;$i<1000;$i=$i+1){
                            $post=$post.$postContent[$i];
                            if($i>500 && $postContent[$i]==' '){
                                break;
                            }
                        }
                    }else{
                        $post=$postContent;
                    }
                    ?>
                    <div class="col-md-4 box anim1" style="margin-top: 10px;">
                        <div class="panel panel-default" style="background: #F5F5F5;">
                            <div class="panel-heading">
                                <h5 class="text-muted"><?php echo $row['pdate'];?></h5>
                            </div>
                            <div class="panel-body">
                                <center><img class="img-thumbnail" src="<?php echo $row['url'];?>" alt="">
                                </center>
                            </div>
                            <div class="panel-footer">
                                <h4 class="text-muted"><?php echo $row['ptitle'];?></h4>
                                <p class="text-muted"><?php echo $post;?></p>
                            </div>
                        </div>
                        <div>
                            <a class="btn btn-block btn-danger" href="read-post.php?pid=<?php echo $row['pid'];?>">Read More</a>
                            <h5 class="text-warning text-right" style="padding: 10px;"><?php echo $row['pcount'];?> views</h5>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function () {
        var heights=[];
        $('.panel').each(function () {
            heights.push($(this).height());
        });

        var maxHeight=Math.max.apply(null,heights);
        $('.panel').height(maxHeight);
    });
</script>



<?php include 'footer.php';?>