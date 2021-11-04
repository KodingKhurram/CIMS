<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/tlogin.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
.logout input[type=submit]{
width: 10%;
background: green;
color:white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
margin-left: 90%;
}
input[type=submit]:hover
{
background: #3498db;
}
</style>
</head>
<body>
<div class="logout">
<a href="index.php"><input type="submit" value="log me out">
</a>
</div>
<?php 
  include "header.php";
 ?>           
<div id="content">
<?php 
           include 'tnavigation.php';
?>		
        <center><div style="position: relative;top: 200px;"  class="contact">
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" name="submit" value="upload"/>
<center>
</form>
<?php
$branch=$_GET['branch'];
if(isset($_POST['submit']))
{
$filename=$_FILES["file"]["name"];
$tempname=$_FILES["file"]["tmp_name"];
$filesize=$_FILES["file"]["size"];
if($filesize < 1000000)
{
$folder="supports/$branch/".$filename;
if(move_uploaded_file($tempname,$folder))
echo "<font face='cooper' color='blue' size='4 pt'>"."Uploaded Successfully..."."</font>";
else
echo "<font face='cooper' color='red' size='4 pt'>"."Error in uploading..."."</font>";
}
}
?>
</div>
</div>
</center>
<?php 
  include "footer.php";
 ?>
</body>
