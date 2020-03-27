<?php
/**
 * Created by PhpStorm.
 * User: SUJAN HASAN
 * Date: 11/25/2018
 * Time: 11:28 PM
 */
?>

<?php
include 'lib/config.php';
include 'lib/mydatabase.php';
$db=new Database();

if (isset($_POST['submit'])){
    $name=$_POST['u_name'];
    $email=$_POST['u_email'];
    $subject=$_POST['u_subject'];
    $msg=$_POST['u_msg'];

    $contactQuery="insert into t_user_message(name,email,subject,content) values ('$name','$email','$subject','$msg')";
    $result=$db->getExecute($contactQuery);
    if ((string)$result=='1'){
        echo "Your message send to admin. Thank you!!!";
    }else{
        echo "Sorry your message can't send for some technical problem!!!";
    }
}

?>
