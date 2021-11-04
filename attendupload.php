<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/tlogin.css">

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
                <center><div class="contact">
<form method="post" action="">
<input type="text" name="sname" placeholder="Enter Student Name"><br/>
<input type="text" name="regno" placeholder="Enter Student Reg_no"> <br/>
<select class='input' name='branch'>
							<option><i>Choose Branch</i></option>
							<option name='EEE'>Electrical & Electronic Engineering</option>
							<option name='CE'>Civil Engineering</option>
							<option name='ME'>Mechanical Engineering</option>
							<option name='CS'>Computer Science</option>
							<option name='IS'>Information Science</option>
						</select><br/>
<select name="sem">
<option><i>choose sem</i></option>
<option>1</option> 
<option>2</option> 
<option>3</option> 
<option>4</option> 
<option>5</option> 
<option>6</option> 
</select><br/>
<input type="text" name="subject" placeholder="Enter Subject name:"><br/>
<input type="text" name="t_classes"  placeholder="Total classes"><br/>
<input type="text" name="a_classes" placeholder="Attended classes"><br/>
<input type="submit" name="submit" value="submit"><br/>
<input type="reset" value="reset">
</form>
<?php
if(isset($_POST['submit']))
{ 
$sname=$_POST['sname'];
$regno=$_POST['regno'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$subject=$_POST['subject'];
$t_classes=$_POST['t_classes'];
$a_classes=$_POST['a_classes'];
$avg_attend=($a_classes*100)/$t_classes;
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,$branch);
$verify=mysqli_query($con,"SELECT * FROM attendence WHERE regno='$regno' AND sem='$sem' ");
while($verrow=mysqli_fetch_assoc($verify))
{
if($verrow['regno']==$regno && $verrow['subject']==$subject)
{
echo "<font face='cooper' color='red' size='4 pt'>"."The given data already exist...<br/>"."</font>";
exit(0);
}
else
$verified=1;
}
if($verified==1)
{
$query="INSERT INTO `attendence` VALUES ('$sname','$regno','$sem','$subject','$t_classes','$a_classes','$avg_attend')";
if(mysqli_query($con,$query))
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
</html>



