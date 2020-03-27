<?php
include 'lib/config.php';
include 'lib/mydatabase.php';

$db=new Database();
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $userName=$_POST['username'];
    $user=$db->checkUser($userName);
}
?>