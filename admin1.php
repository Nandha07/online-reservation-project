<!DOCTYPE html>
<html>
<head>
<title>VIEW CANDIDATES</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class='review'>
  <h1> VIEW APPLIED CANDIDATES</h1>

</div>
<table>
  <tr>
    <th>course reservation</th>

      <tr>

      <td>NAME</td>
    <td>EMAIL</td>
    <td>PHONE</td>

    <td>DATE</td>
    <td>GENDER</td>

      <td>COURSE</td>

    </tr>
<?php
$con = mysqli_connect('localhost', 'root', '','cms');

$res=('SELECT * from COURSE');
 $res=mysqli_query($con,$res);
$total=mysqli_num_rows($res);
$num=mysqli_fetch_assoc($res);
if($total){

}
while($num=mysqli_fetch_assoc($res)){

  echo"
  <tr>
  <td>".$num['Name']."</td>
  <td>".$num['Email']."</td>
  <td>".$num['ph.no']."</td>

  <td>".$num['DATE']."</td>

  <td>".$num['GENDER']."</td>
  <td>".$num['COURSE']."</td>






  ";



}
?>

</tr>

</table>
  <button type="submit" name="button"><a href="index.html"> LOGOUT</button></a>


</body>
</html>
