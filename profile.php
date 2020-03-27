<?php
/**
 * Created by PhpStorm.
 * User: SUJAN HASAN
 * Date: 11/22/2018
 * Time: 11:51 PM
 */
?>

<?php
include 'header.php';
include 'lib/config.php';
include 'lib/mydatabase.php';

$db=new Database();

$userId=$_GET['user_id'];

$personalQuery="select * from personal_info where user_id='$userId'";
$result1=$db->getAll($personalQuery);

$contactQuery="select * from t_contact_info where user_id='$userId'";
$result2=$db->getAll($contactQuery);

$familyQuery="select * from t_family_info where user_id='$userId'";
$result3=$db->getAll($familyQuery);

$professionQuery="select * from t_professional_info where user_id='$userId'";
$result4=$db->getAll($professionQuery);

$socialQuery="select * from v_social where user_id='$userId'";
$result5=$db->getAll($socialQuery);
?>

<style>
    .social{}
    .social a{
        font-size: 20px;
        padding: 10px;
        border-radius: 50%;
        margin-right: 2px;
    }
    .social a:hover{

        color: #333333;
    }
    .facebook{
        background: #3B5998;
        color: white;
    }
    .skype{
        background: #00aff0;
        color: white;
    }
    .twitter{
        background: #55ACEE;
        color: white;
    }
    .viber{
        background: #45bbff;
        color: white;
    }
    .whatsapp{
        background: #2c4762;
        color: white;
    }
    .linkdin{
        background: #007bb5;
        color: white;
    }
    .service{

    }
    .service h2{
        color:#8c8b8b;
        font-size:20px;
        padding:10px 0px;
    }
    .service-img{
        background:#A8A8A8;
        padding:40px 0px;
        border:5px solid #fff;
        box-shadow:0px -2px 2px #999;
    }
    .service:hover{
        transform: scaleY(1.2);
    }
    .service-img img{
        height: 80px;
        width: 80px;
    }
    th{
        width: 30%;
        text-align: center;
    }
    td{
        text-align: center;
    }
</style>

<div class="container">
    <div class="row">
         <div class="col-md-12" style="padding: 30px 200px;">
             <?php
             while ($row1=mysqli_fetch_assoc($result5)) {
                 ?>
                 <div class="col-md-4">
                     <img class="img-thumbnail img-circle" src="<?php echo $row1['img'];?>" alt="Profile Image">
                 </div>
                 <div class="col-md-8">
                     <h2 class="text-muted"><?php echo $row1['f_name']." ".$row1['l_name'];?></h2>
                     <h4><?php echo $row1['dept'];?></h4>
                     <div class="social">
                         <a href="<?php echo $row1['facebook'];?>" class="fa fa-facebook facebook" title="Facebook"></a>
                         <a href="<?php echo $row1['skype'];?>" class="fa fa-skype skype" title="Skype"></a>
                         <a href="<?php echo $row1['twitter'];?>" class="fa fa-twitter twitter" title="Twitter"></a>
                         <a href="<?php echo $row1['viber'];?>" class="fa fa-vimeo viber" title="Viber"></a>
                         <a href="<?php echo $row1['whatsapp'];?>" class="fa fa-whatsapp whatsapp" title="WhatsApp"></a>
                         <a href="<?php echo $row1['linkedin'];?>" class="fa fa-linkedin linkdin" title="LinkedIn"></a>
                     </div>
                 </div>
                 <?php
             }
                 ?>
         </div>
    </div>
    <div class="row">
        <div class="row" style="text-align: center; padding: 20px 50px;">
            <div class="col-md-3 anim5" id="personalClick">
                <div class="service">
                    <div class="service-img">
                        <img src="images/personal.png" alt="Personal Information">
                    </div>
                    <h2>Personal Information</h2>
                </div>
            </div>
            <div class="col-md-3 anim5" id="contactClick">
                <div class="service text-center">
                    <div class="service-img">
                        <img src="images/contact.png" alt="Personal Information">
                    </div>
                    <h2>Contact Information</h2>
                </div>
            </div>
            <div class="col-md-3 anim5" id="familyClick">
                <div class="service text-center">
                    <div class="service-img">
                        <img src="images/family.png" alt="Personal Information">
                    </div>
                    <h2>Family Information</h2>
                </div>
            </div>
            <div class="col-md-3 anim5" id="professionalClick">
                <div class="service text-center">
                    <div class="service-img">
                        <img src="images/professional.png" alt="Personal Information">
                    </div>
                    <h2>Professional Information</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="personalInformation" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-info">Personal Information</h3>
                </div>
                <div class="panel-body">
                    <?php
                    while ($row2=mysqli_fetch_assoc($result1)) {
                        ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <td><?php echo $row2['title']." ".$row2['f_name']." ".$row2['l_name'];?></td>
                            </tr>
                            <tr>
                                <th>Nick Name</th>
                                <td><?php echo $row2['n_name'];?></td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td><?php echo $row2['b_date'];?></td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td><?php echo $row2['gender'];?></td>
                            </tr>
                            <tr>
                                <th>Blood-Group</th>
                                <td><?php echo $row2['b_group'];?></td>
                            </tr>
                            <tr>
                                <th>National-Id</th>
                                <td><?php echo $row2['n_id'];?></td>
                            </tr>
                            <tr>
                                <th>Religion</th>
                                <td><?php echo $row2['religion'];?></td>
                            </tr>
                            <tr>
                                <th>Department</th>
                                <td><?php echo $row2['dept'];?></td>
                            </tr>
                            <tr>
                                <th>Hall</th>
                                <td><?php echo $row2['hall'];?></td>
                            </tr>
                            <tr>
                                <th>Highest-Degree</th>
                                <td><?php echo $row2['h_degree'];?></td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td><?php echo $row2['d_country'];?></td>
                            </tr>
                            <tr>
                                <th>Institution</th>
                                <td><?php echo $row2['d_inst'];?></td>
                            </tr>
                            <tr>
                                <th>Hsc Passing Year</th>
                                <td><?php echo $row2['hsc'];?></td>
                            </tr>
                            <tr>
                                <th>Board</th>
                                <td><?php echo $row2['board'];?></td>
                            </tr>
                            <tr>
                                <th>Institution</th>
                                <td><?php echo $row2['inst'];?></td>
                            </tr>
                        </table>
                        <?php
                    }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="contactInformation" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-info">Contact Info</h3>
                </div>
                <div class="panel-body">
                    <?php
                    while ($row3=mysqli_fetch_assoc($result2)) {
                        ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>Primary Email</th>
                                <td><?php echo $row3['primary_email'];?></td>
                            </tr>
                            <tr>
                                <th>Telephone</th>
                                <td><?php echo $row3['telephone'];?></td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td><?php echo $row3['mobile'];?></td>
                            </tr>
                            <tr>
                                <th colspan="2">Present Address</th>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td><?php echo $row3['pcountry'];?></td>
                            </tr>
                            <tr>
                                <th>District/State</th>
                                <td><?php echo $row3['district'];?></td>
                            </tr>
                            <tr>
                                <th>Upazila/City</th>
                                <td><?php echo $row3['zila'];?></td>
                            </tr>
                            <tr>
                                <th>Zip Code</th>
                                <td><?php echo $row3['zipcode'];?></td>
                            </tr>
                            <tr>
                                <th>Mailing Address</th>
                                <td><?php echo $row3['pmail'];?></td>
                            </tr>
                            <tr>
                                <th colspan="2">Permanent Address</th>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td><?php echo $row3['percountry'];?></td>
                            </tr>
                            <tr>
                                <th>District/State</th>
                                <td><?php echo $row3['perdistrict'];?></td>
                            </tr>
                            <tr>
                                <th>Upazila/City</th>
                                <td><?php echo $row3['perzila'];?></td>
                            </tr>
                            <tr>
                                <th>Mailing Address</th>
                                <td><?php echo $row3['permail'];?></td>
                            </tr>
                        </table>
                        <?php
                    }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="familyInformation" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-info">Family Information</h3>
                </div>
                <div class="panel-body">
                    <?php
                    while ($row4=mysqli_fetch_assoc($result3)) {
                        ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>Father's Name</th>
                                <td><?php echo $row4['father_name'];?></td>
                            </tr>
                            <tr>
                                <th>Mother's Name</th>
                                <td><?php echo $row4['mother_name'];?></td>
                            </tr>
                            <tr>
                                <th>Marital Status</th>
                                <td><?php echo $row4['marital_status'];?></td>
                            </tr>
                        </table>
                        <?php
                    }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="professionalInformation" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-info">Professional Information</h3>
                </div>
                <div class="panel-body">
                    <?php
                    while ($row5=mysqli_fetch_assoc($result4)) {
                        ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>Profession</th>
                                <td><?php echo $row5['profession'];?></td>
                            </tr>
                            <tr>
                                <th>Designation</th>
                                <td><?php echo $row5['designation'];?></td>
                            </tr>
                            <tr>
                                <th>Ministry</th>
                                <td><?php echo $row5['ministry'];?></td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td><?php echo $row5['country'];?></td>
                            </tr>
                            <tr>
                                <th>District/City</th>
                                <td><?php echo $row5['district'];?></td>
                            </tr>
                            <tr>
                                <th>Office Address</th>
                                <td><?php echo $row5['office_address'];?></td>
                            </tr>
                        </table>
                        <?php
                    }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>