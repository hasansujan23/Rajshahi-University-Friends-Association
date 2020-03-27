<?php
include 'lib/config.php';
include 'lib/mydatabase.php';

function generateOTP($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ(){}[]@#$&*';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateRandomString($length = 4) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if (isset($_POST['submit'])){

    $title=$_POST['title'];
    $gender=$_POST['gender'];
    $fName=$_POST['firstName'];
    $m_name=$_POST['middleName'];
    $l_name=$_POST['lastName'];
    $n_name=$_POST['nickName'];
    $b_date=$_POST['dateOfBirth'];
    $b_group=$_POST['bloodGroup'];
    $n_id=$_POST['nationalId'];
    $religion=$_POST['religion'];
    $dept=$_POST['department'];
    $hall=$_POST['hall'];
    $hDegree=$_POST['highestDegree'];
    $dCountry=$_POST['degreeCountry'];
    $dInst=$_POST['degreeInstitution'];
    $hsc=$_POST['hscPassingYear'];
    $board=$_POST['hscBoard'];
    $hInst=$_POST['hscInstitution'];
    $imgUrl=$_POST['imgUrl'];
    $str=generateRandomString();
    $u_id=$l_name.$str;
    $primaryMail=$_POST['primaryEmail'];
    $telephone=$_POST['telephone'];
    $mobile=$_POST['mobile'];
    $facebook=$_POST['facebook'];
    $skype=$_POST['skype'];
    $twitter=$_POST['twitter'];
    $viber=$_POST['viber'];
    $whatsApp=$_POST['whatsApp'];
    $linkedIn=$_POST['linkedIn'];
    $presentCountry=$_POST['presentCountry'];
    $presentDistrict=$_POST['presentDistrict'];
    $presentZila=$_POST['presentZila'];
    $presentState=$_POST['presentState'];
    $presentCity=$_POST['presentCity'];
    $presentMail=$_POST['presentMail'];
    $presentZip=$_POST['presentZip'];
    $perCountry=$_POST['permanentCountry'];
    $perDistrict=$_POST['permanentDistrict'];
    $perZila=$_POST['permanentZila'];
    $perMail=$_POST['permanentMail'];
    $fatherName=$_POST['fatherName'];
    $motherName=$_POST['motherName'];
    $maritalStatus=$_POST['maritalStatus'];
    $profession=$_POST['profession'];
    $designation=$_POST['designation'];
    $ministry=$_POST['ministry'];
    $proCountry=$_POST['professionCountry'];
    $proDistrict=$_POST['professionDistrict'];
    $proCity=$_POST['professionCity'];
    $proAddress=$_POST['professionAddress'];

    $db=new Database();
    $query1="insert into personal_info values ('$u_id','$title','$gender','$fName','$m_name','$l_name','$n_name','$b_date','$b_group','$n_id','$religion','$dept','$hall','$hDegree','$dCountry','$dInst','$hsc','$board','$hInst','$imgUrl')";
    $row1=$db->getExecute($query1);
    if ((string)$row1=='1'){
        if($presentDistrict==''){
            $presentDistrict=$presentState;
            $presentZila=$presentCity;
        }
        $contactQuery="insert into t_contact_info values('$u_id','$primaryMail','$telephone','$mobile','$presentCountry','$presentDistrict','$presentZila','$presentMail','$presentZip','$perCountry','$perDistrict','$perZila','$perMail')";
        $row2=$db->getExecute($contactQuery);
        $socialQuery="insert into t_social_info values('$u_id','$facebook','$skype','$twitter','$viber','$whatsApp','$linkedIn')";
        $row5=$db->getExecute($socialQuery);
        if((string)$row2=='1'){
            $familyQuery="insert into t_family_info values('$u_id','$fatherName','$motherName','$maritalStatus')";
            $row3=$db->getExecute($familyQuery);
            if((string)$row3=='1'){
                if($proDistrict==''){
                    $proDistrict=$proCity;
                }
                $professionQuery="insert into t_professional_info values('$u_id','$profession','$designation','$ministry','$proCountry','$proDistrict','$proAddress')";
                $row4=$db->getExecute($professionQuery);
                if((string)$row4=='1'){
                    $otp=generateOTP(10);
                    $statusId=0;
                    $loginQuery="insert into t_user_login values('$u_id','$otp','$primaryMail','$statusId')";
                    $row5=$db->getExecute($loginQuery);
                    if((string)$row5=='1'){
                        echo "Registration Successful. When admin approve your registration then your user id and password send to your primary email. Thank you";
                    }else{
                        echo $row5;
                    }
                }else{
                    echo $row4;
                }
            }else{
                echo $row3;
            }
        }else{
            echo $row2;
        }

    }else{
        echo $row1;
    }
}




?>
