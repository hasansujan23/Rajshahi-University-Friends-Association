<?php
include 'header.php';
include 'lib/config.php';
include 'lib/mydatabase.php';

$db=new Database();

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 contact-div" style="">
            <h3>Complete Registration with Your Information</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <form class="" action="user-registration.php" method="POST" enctype="multipart/form-data">
            <div class="panel-body">

                <ul class="nav nav-tabs">
                    <li class="active" id="li_personal"><a >Personal Info</a></li>
                    <li class="disabled" id="li_contact"><a   id="a_contactInfo">Contact Info</a></li>
                    <li class="disabled" id="li_family"><a  id="a_familyInfo">Family Info</a></li>
                    <li class="disabled" id="li_prof"><a  id="a_prof">Professional Info</a></li>
                </ul>

                <div class="tab-content container">
                    <div id="home" class="tab-pane fade in active">

                            <div class="form-group row col-md-12 mt">
                                <div class="form-group col-md-6">
                                    <label for="email">Title</label><span style="color: red;font-size: large;"> *</span>
                                    <select class="form-control" id="pTitle" name="title">
                                        <option disabled selected hidden>Choose a Title </option>
                                        <option>Mr.</option>
                                        <option>Mrs.</option>
                                        <option>Miss.</option>
                                        <option>Dr.</option>
                                    </select>
                                    <span class="text-danger" id="errorTitle"></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender">
                                        <option disabled selected hidden>Choose Gender </option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-xs-4">
                                    <label for="ex1">First Name</label><span style="color: red;font-size: large;"> *</span>
                                    <input class="form-control" id="pFirstName" type="text" name="firstName" placeholder="Enter first name"><span class="text-danger" id="errorFirstName"></span>
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex2">Middle Name</label>
                                    <input class="form-control" id="ex2" name="middleName" type="text" placeholder="Enter middle name">
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex3">Last Name</label><span style="color: red;font-size: large;"> *</span>
                                    <input class="form-control" id="pLastName" name="lastName" type="text" placeholder="Enter last name"><span class="text-danger" id="errorLastName"></span>
                                </div>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-xs-4">
                                    <label for="ex1">Nick Name</label><span style="color: red;font-size: large;"> *</span>
                                    <input class="form-control" id="pNickName" name="nickName" type="text" placeholder="Enter nick name"><span class="text-danger" id="errorNickName"></span>
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex2">Date of Birth</label><span style="color: red;font-size: large;"> *</span>
                                    <input class="form-control" id="pDate" name="dateOfBirth" type="date"><span class="text-danger" id="errorDate"></span>
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex3">Blood Group</label><span style="color: red;font-size: large;"> *</span>
                                    <select class="form-control" id="pBloodGroup" name="bloodGroup">
                                        <option disabled selected hidden>Choose a blood group</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                    </select>
                                    <span class="text-danger" id="errorBloodGroup"></span>
                                </div>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-xs-6">
                                    <label for="ex1">National ID No</label>
                                    <input class="form-control" id="ex1" name="nationalId" type="text" placeholder="Enter national id number">
                                </div>
                                <div class="col-xs-6">
                                    <label for="ex2">Religion</label>
                                    <select class="form-control" name="religion"  placeholder="Choose a blood group">
                                        <option disabled selected hidden>Choose a Religion</option>
                                        <option>Islam</option>
                                        <option>Hinduism</option>
                                        <option>Buddhism</option>
                                        <option>Christianity</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-md-6">
                                    <label for="ex1">Department</label><span style="color: red;font-size: large;"> *</span>
                                    <select class="form-control" id="pDepartment" name="department">
                                        <option disabled selected hidden>Choose a department</option>
                                        <option>CSE</option>
                                        <option>EEE</option>
                                    </select>
                                    <span class="text-danger" id="errorDept"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="ex2">Hall</label><span style="color: red;font-size: large;"> *</span>
                                    <select class="form-control" id="pHall" name="hall">
                                        <option disabled selected hidden>Choose a Hall</option>
                                        <option>Mash</option>
                                        <option>Alam</option>
                                    </select>
                                    <span class="text-danger" id="errorHall"></span>
                                </div>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-xs-4">
                                    <label for="ex1">Highest Degree</label>
                                    <select class="form-control" name="highestDegree">
                                        <option disabled selected hidden>Choose a Degree</option>
                                        <option>Bsc</option>
                                        <option>MA</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex2">Country</label>
                                    <select class="form-control" name="degreeCountry">
                                        <option disabled selected hidden>Choose a Country</option>
                                        <option>Bangladesh</option>
                                        <option>India</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex3">Institution</label>
                                    <input class="form-control" id="ex3" name="degreeInstitution" type="text" placeholder="Enter the Institution">
                                </div>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-xs-4">
                                    <label for="ex1">Hsc passing year</label>
                                    <select class="form-control" name="hscPassingYear">
                                        <option disabled selected hidden>Choose a year</option>
                                        <option>2011</option>
                                        <option>2010</option>
                                        <option>2009</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex2">Board</label>
                                    <select class="form-control" name="hscBoard">
                                        <option disabled selected hidden>Choose a Board</option>
                                        <option>Chittagong</option>
                                        <option>Dhaka</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex3">Institution</label>
                                    <input class="form-control" id="ex3" name="hscInstitution" type="text" placeholder="Enter the Institution">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group col-md-12">
                                    <label>Select Image</label><span style="color: red;font-size: large;"> *</span>
                                    <div class="" align="center">
                                        <input type="file" name="upload_image" id="upload_image" />
                                        <br />
                                        <div id="uploaded_image">
                                            <img src="" id="upImage">
                                        </div>
                                        <div style="padding: 20px;display: none;">
                                            <input type="text" id="imgUrl" name="imgUrl">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="form-group col-md-12">
                            <input type="button" id="btn_personalInfo" class="btn btn-primary" value="NEXT" style="float: right;">
                        </div>
                    </div>





                    <div id="menu1" class="tab-pane">
<!--                        <form class="">-->
                            <div class="form-group row col-md-12 mt">
                                <div class="col-xs-4">
                                    <label for="ex1">Primary Email</label><span class="text-danger"> *</span>
                                    <input class="form-control" id="cPrimaryEmail" name="primaryEmail" type="text"><span class="text-danger" id="errorPrimaryEmail"></span>
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex2">Telephone Number</label>
                                    <input class="form-control" id="ex2" name="telephone" type="text" placeholder="Enter Telephone number">
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex3">Mobile</label><span class="text-danger"> *</span>
                                    <input class="form-control" id="cMobile" name="mobile" type="text"><span class="text-danger" id="errorMobile"></span>
                                </div>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-xs-4">
                                    <label for="ex1">Facebook</label>
                                    <input class="form-control" id="ex1" name="facebook" type="text" placeholder="Enter Facebook Address">
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex2">Skype</label>
                                    <input class="form-control" id="ex2" name="skype" type="text" placeholder="Enter Skype address">
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex3">Twitter</label>
                                    <input class="form-control" id="ex3" name="twitter" type="text" placeholder="Enter Twitter address">
                                </div>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-xs-4">
                                    <label for="ex1">Viber</label>
                                    <input class="form-control" id="ex1" name="viber" type="text" placeholder="Enter Viber Address">
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex2">WhatsApp</label>
                                    <input class="form-control" id="ex2" name="whatsApp" type="text" placeholder="Enter WhatsApp address">
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex3">LinkedIn</label>
                                    <input class="form-control" id="ex3" name="linkedIn" type="text" placeholder="Enter LinkedIn address">
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <h4 class="text-muted">Present Address</h4>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-xs-4">
                                    <label for="ex1">Country</label><span class="text-danger"> *</span>
                                    <select class="form-control" id="pcountry" name="presentCountry">
                                        <option disabled selected hidden>Choose a country</option>
                                        <?php
                                            $countryQuery="select * from apps_countries";
                                            $result=$db->getAll($countryQuery);
                                            while ($row=mysqli_fetch_assoc($result)) {
                                                ?>
                                                <option><?php echo $row['country_name'];?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                    <span class="text-danger" id="errorCountry"></span>
                                </div>
                                <div class="col-xs-4" id="pdistrict" style="display: none;">
                                    <label for="ex2">District</label><span class="text-danger"> *</span>
                                    <select class="form-control" id="cDistrict" name="presentDistrict">
                                        <option disabled selected hidden>Choose a District</option>
                                        <?php
                                        $countryQuery="select * from districts";
                                        $result=$db->getAll($countryQuery);
                                        while ($row=mysqli_fetch_assoc($result)) {
                                            ?>
                                            <option><?php echo $row['name'];?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <span class="text-danger" id="errorDistrict"></span>
                                </div>
                                <div class="col-xs-4" id="pupazila" style="display: none;">
                                    <label for="ex3">Upazila/Thana</label><span class="text-danger"> *</span>
                                    <select class="form-control" id="cZilla" name="presentZila">
<!--                                        <option disabled selected hidden>Choose a Upazila</option>-->
<!--                                        <option>Dhaka</option>-->
                                    </select>
                                    <span class="text-danger" id="errorZila"></span>
                                </div>
                                <div class="col-xs-4" id="pstate" style="display: none;">
                                    <label for="ex3">State</label><span class="text-danger"> *</span>
                                    <input class="form-control" id="cState" name="presentState" placeholder="Enter State"><span class="text-danger" id="errorState"></span>
                                </div>
                                <div class="col-xs-4" id="pcity" style="display: none;">
                                    <label for="ex3">City</label><span class="text-danger"> *</span>
                                    <input class="form-control" id="cCity" name="presentCity" placeholder="Enter City"><span class="text-danger" id="errorCity"></span>
                                </div>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-xs-4" id="pmail" style="display: none;">
                                    <label for="ex1">Mailing Address</label>
                                    <input class="form-control" id="" name="presentMail" type="text" placeholder="Enter Mail Address">
                                </div>
                                <div class="col-xs-4" id="pzip" style="display: none;">
                                    <label for="ex1">Zip-Code</label>
                                    <input class="form-control" id="" name="presentZip" type="text" placeholder="Enter Zip-Code">
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                <h4 class="text-muted">Parmanent Address</h4>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-xs-4">
                                    <label for="ex1">Country</label><span class="text-danger"> *</span>
                                    <select class="form-control" id="cPerCountry" name="permanentCountry">
                                        <option disabled selected hidden>Choose a country</option>
                                        <?php
                                        $countryQuery="select * from apps_countries";
                                        $result=$db->getAll($countryQuery);
                                        while ($row=mysqli_fetch_assoc($result)) {
                                            ?>
                                            <option><?php echo $row['country_name'];?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <span class="text-danger" id="errorPerCountry"></span>
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex2">District</label><span class="text-danger"> *</span>
                                    <select class="form-control" id="cPerDistrict" name="permanentDistrict">
                                        <option disabled selected hidden>Choose a District</option>
                                        <?php
                                        $countryQuery="select * from districts";
                                        $result=$db->getAll($countryQuery);
                                        while ($row=mysqli_fetch_assoc($result)) {
                                            ?>
                                            <option><?php echo $row['name'];?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <span class="text-danger" id="errorPerDistrict"></span>
                                </div>
                                <div class="col-xs-4">
                                    <label for="ex3">Upazila/Thana</label><span class="text-danger"> *</span>
                                    <select class="form-control" id="cPerZilla" name="permanentZila">

                                    </select>
                                    <span class="text-danger" id="errorPerZila"></span>
                                </div>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-xs-4">
                                    <label for="ex1">Mailing Address</label>
                                    <input class="form-control" id="ex1" name="permanentMail" type="text" placeholder="Enter Mail Address">
                                </div>
                            </div>
<!--                        </form>-->
                        <div class="form-group col-md-12">
                            <input type="button" id="btn_contactInfo" class="btn btn-primary" value="NEXT" style="float: right;">
                        </div>
                    </div>





                    <div id="menu2" class="tab-pane fade">
<!--                        <form>-->
                            <div class="form-group row col-md-12 mt">
                                <div class="col-md-6">
                                    <label for="ex1">Father's Name</label><span style="color: red;"> *</span>
                                    <input class="form-control" id="fatherName" name="fatherName" type="text" placeholder="Enter Father's Name"><span class="text-danger" id="errorFatherName"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="ex1">Mother's Name</label><span style="color: red;"> *</span>
                                    <input class="form-control" id="motherName" name="motherName" type="text" placeholder="Enter Mother's Name"><span class="text-danger" id="errorMotherName"></span>
                                </div>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-md-6">
                                    <label for="ex1">Marital Status</label>
                                    <select class="form-control" name="maritalStatus">
                                        <option disabled selected hidden>Choose Marital Status</option>
                                        <option>Married</option>
                                        <option>Unmarried</option>
                                        <option>Others</option>
                                    </select>
                                </div>

                            </div>
                        <div class="form-group col-md-12">
                            <input type="button" id="btn_familyInfo" class="btn btn-primary" value="NEXT" style="float: right;">
                        </div>
                    </div>



                    <div id="menu3" class="tab-pane fade">
<!--                        <form>-->
                            <div class="form-group row col-md-12 mt">
                                <div class="col-md-4">
                                    <label for="ex1">Profession</label>
                                    <select class="form-control" name="profession">
                                        <option disabled selected hidden>Choose a profession</option>
                                        <option>Software Developer</option>
                                        <option>IT</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="ex1">Designation</label>
                                    <input class="form-control" name="designation" type="text" placeholder="Enter Designation">
                                </div>
                                <div class="col-md-4">
                                    <label for="ex1">Ministry/Organization/Company</label>
                                    <input class="form-control" type="text" name="ministry" placeholder="Enter Ministry/Organization/Company">
                                </div>
                            </div>
                            <div class="form-group row col-md-12 mt">
                                <div class="col-md-4">
                                    <label for="ex1">Country</label>
                                    <select class="form-control" id="professionCountry" name="professionCountry">
                                        <option disabled selected hidden>Choose Country</option>
                                        <?php
                                        $countryQuery="select * from apps_countries";
                                        $result=$db->getAll($countryQuery);
                                        while ($row=mysqli_fetch_assoc($result)) {
                                            ?>
                                            <option><?php echo $row['country_name'];?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4" id="professionDistrict" style="display: none;">
                                    <label for="ex1">District</label>
                                    <select class="form-control" name="professionDistrict">
                                        <option disabled selected hidden>Choose District</option>
                                        <?php
                                        $countryQuery="select * from districts";
                                        $result=$db->getAll($countryQuery);
                                        while ($row=mysqli_fetch_assoc($result)) {
                                            ?>
                                            <option><?php echo $row['name'];?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4" id="professionCity" style="display: none;">
                                    <label for="ex1">City</label>
                                    <input class="form-control" name="professionCity" type="text" placeholder="Enter City">
                                </div>
                                <div class="col-md-4">
                                    <label for="ex1">Office address</label>
                                    <input class="form-control" name="professionAddress" type="text" placeholder="Enter Office address">
                                </div>

                            </div>
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" id="btn_register" class="btn btn-primary" value="REGISTER" style="float: right;">
                        </div>

                    </div>
            </form>

                </div>
            </div>
            </div>
            <div class="panel-footer" style="height: 60px;">
                <div style="float: right;">
                    <a href="login.php" style="padding: 0px 10px;">Already Registered? Login</a>

                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>
