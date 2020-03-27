<?php
/**
 * Created by PhpStorm.
 * User: SUJAN HASAN
 * Date: 11/22/2018
 * Time: 8:59 PM
 */
?>
<?php
include 'lib/config.php';
include 'lib/mydatabase.php';

$db=new Database();
if(isset($_POST['dId'])){
    $dName=$_POST['dId'];
}






$zilaQuery="select upazila from v_zila where district='$dName'";
$result=$db->getAll($zilaQuery);
$output='<option disabled selected hidden>Select Upazila</option>';
while ($row=mysqli_fetch_assoc($result)){
    $output.='<option>'.$row["upazila"].'</option>';
}
echo $output;
?>

