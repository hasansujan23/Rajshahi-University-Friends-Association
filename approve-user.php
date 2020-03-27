<?php
/**
 * Created by PhpStorm.
 * User: SUJAN HASAN
 * Date: 11/25/2018
 * Time: 1:17 AM
 */
?>
<?php
require 'PHPMailer/PHPMailerAutoload.php';
include 'lib/config.php';
include 'lib/mydatabase.php';

$db=new Database();

$userId=$_GET['user_id'];
$userQuery="select * from t_user_login where user_id='$userId'";
$result=$db->getAll($userQuery);
$pwd='';
$email='';

while ($row=mysqli_fetch_assoc($result)){
    $pwd=$row['pwd'];
    $email=$row['email'];
}

if($userId!='' && $email!=''){
    $address=$email;
    $message="Your user id: ".$userId." and Your Password: ".$pwd;

    $mail = new PHPMailer();

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hasansujan23@gmail.com';                 // SMTP username
    $mail->Password = '01754704559';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->Subject = "Password from server";
    $mail->Body= $message;

    $mail->setFrom('hasansujan23@gmail.com', 'Server');
    $mail->addAddress($address, 'sujan');     // Add a recipient


    if(!$mail->send()) {
        echo 'Message could not be sent.';
        $errMsg= 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $updateUser="update t_user_login set status_id=1";
        $updateResult=$db->getExecute($updateUser);
        if($updateResult>0){
            header("Location: admin-panel.php");
        }else{
            echo "Occur some problem in server. Please try again later";
        }
        $successMsg="password send to your email";
    }
}else{
    $errMsg="Please try again later";
}
?>
