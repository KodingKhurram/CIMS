<center>
<form action='' method='post' enctype='multipart/form-data'>
<input type='file' name='file'>
<input type='submit' name='submit' value='change image'/>
</form>
</center>
<?php 
if(isset($_POST['submit']))
{
error_reporting(0);
$regno=$_GET['regno'];
$filename=$_FILES["file"]["name"];
$tempname=$_FILES["file"]["tmp_name"];
$ext=end(explode(".",$filename));
$fname=$regno.'.'.$ext;
$folder="profile pic/students/".$fname;
if(move_uploaded_file($tempname,$folder))
echo "<font face='cooper' color='blue' size='4 pt'>"."Uploaded Successfully...<br/>Please refresh to view your pic"."</font>";
else
echo "<font face='cooper' color='red' size='4 pt'>"."Error in uploading..."."</font>";
}
?>