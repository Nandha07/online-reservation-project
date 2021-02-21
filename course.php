

<?php
$con = mysqli_connect('localhost', 'root', '','cms');

$name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$date = $_POST['date'];
$gender=$_POST['gender'];
$course=$_POST['course'];


$sql = "INSERT INTO course ( `Name`, `Email`, `ph.no`, `DATE`,`GENDER`,`COURSE`) VALUES ( '$name', '$Email', '$Phone', '$date','$gender','$course')";

$rs = mysqli_query($con, $sql);


if(isset($_POST['Submit'])){
$to="snandhakumar8437@gmail.com";
$subject=$_REQUEST["course"];
$email=$_REQUEST["email"];
$body=" course reserved successfully";
$header="from:$email";
$mail=mail($to,$subject,$body,$header);
if($mail){
header("location:index.html");
}
}

?>
