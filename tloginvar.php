<?php
$con=mysqli_connect("localhost","root","");
$tname=$_POST['tname'];
$pword=$_POST['pword'];
$branch=$_POST['branch'];
if(mysqli_select_db($con,$branch)) echo "seleced";
$result=mysqli_query($con,"SELECT * FROM teacher");
while($verify=mysqli_fetch_array($result))
{
if($verify['name']==$tname && $verify['password']==$pword && $verify['branch']==$branch)
{
$flag=1;
break;
}
}
if($flag==1)
header('Location:http://localhost/sark/tpage.php?tname='.$tname.'&branch='.$branch.'  ');
else
header('Location:http://localhost/sark/tlogin.php?error=1 ');
?>


 

