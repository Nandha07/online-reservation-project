

<?php
$con = mysqli_connect('localhost', 'root', '','cms');

$name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$pass = $_POST['password'];

$sql = "INSERT INTO signup1 ( `NAME`, `Email`, `PHONE`, `PASSWORD`) VALUES ( '$name', '$Email', '$Phone', '$pass')";

$rs = mysqli_query($con, $sql);
if($rs)
{
  header('location:index.html');

}
?>
