

<?php

$nam = $_POST['name'];
$pas = $_POST['password'];
$nam=stripslashes($nam);
$pas=stripslashes($pas);


$con = mysqli_connect('localhost', 'root', '','cms');

$rs="select * from `signup1` where `NAME`='$nam' && `PASSWORD`='$pas'";
$rs = mysqli_query($con, $rs);
$num=mysqli_fetch_array($rs);
if($num["NAME"]==$nam && $num["PASSWORD"]==$pas)
{
  echo

  header('location:admin1.php');

}else{
echo"log in failed";
header('location:signup.html');
}
?>
