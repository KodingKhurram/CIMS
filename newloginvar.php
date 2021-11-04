<?php 
error_reporting(0);
$con=mysqli_connect("localhost","root","");
$tname=$_POST['tname'];
$pword=$_POST['password'];
$branch=$_POST['branch'];
mysqli_select_db($con,$branch);
$query="INSERT INTO `teacher` VALUES('$tname','$pword','$branch')";
if(mysqli_query($con,$query))
header('Location:http://localhost/sark/tpage.php?tname='.$tname.'&branch='.$branch.'  ');
else
header('Location:http://localhost/sark/newlogin.php?error=1  ');
?>