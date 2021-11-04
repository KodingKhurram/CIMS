<?php
$sname=$_POST['name'];
$regno=$_POST['regno'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
if(preg_match("/[0-9][0-9][0-9][a-z][a-z][0-9][0-9][0-9][0-9][0-9]/",$regno) && preg_match("/433/",$regno))
header('Location:http://localhost/sark/spage.php?sname='.$sname.'&regno='.$regno.'&branch='.$branch.'&sem='.$sem.'  ');
else
header('Location:http://localhost/sark/slogin.php?error=1 ');
?>


