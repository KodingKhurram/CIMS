
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
                <center><div class="contact">
<form method="post" action="">
<input type="text" name="sname" placeholder="Enter Student Name"><br/>
<input type="text" name="regno" placeholder="Enter Reg_No"><br/>
<select class='input' name='branch'>
							<option><i>Choose Branch</i></option>
							<option name='EEE'>Electrical & Electronic Engineering</option>
							<option name='CE'>Civil Engineering</option>
							<option name='ME'>Mechanical Engineering</option>
							<option name='CS'>Computer Science</option>
							<option name='IS'>Information Science</option>
						</select><br/>
<select  name='sem'>
<option><i>choose sem</i></option>
<option>1</option> 
<option>2</option> 
<option>3</option> 
<option>4</option> 
<option>5</option> 
<option>6</option> 
</select><br/>
<?php
error_reporting(0);
if(isset($_POST['submit']))
{ 
$sname=$_POST['sname'];
$regno=$_POST['regno'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$subject=$_POST['subject'];
$f_internals=$_POST['f_internals'];
$s_internals=$_POST['s_internals'];
$t_internals=$_POST['t_internals'];
$total=$f_internals+$s_internals+$t_internals;
$avg=$total/3;
if ($branch=="Computer Science")
				 {
								if($sem==6)
								{
									echo "<select class='input' name='subject'>
									<option><i>Choose subject</i></option>
							        <option name='ST'>Software testing</option>
							        <option name='NSM'>Network security & management</option>
							        <option name='CC'>Cloud computing</option>
							        <option name='ST lab'>Software testing lab</option>
							        <option name='NSM lab'>Network security & management lab</option>
									</select><br/>";
									echo "<center><b><i>Enter Marks Of:</i></b></center><br/>";
									echo "<input type='text' name='f_internals' placeholder='First Internals'><br/>";
									echo "<input type='text' name='s_internals' placeholder='Second Internals'><br/>";
									echo "<input type='text' name='t_internals' placeholder='Third Internals'><br/>";
									}
									}
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,$branch);
$verify=mysqli_query($con,"SELECT * FROM iamarks WHERE regno='$regno' AND sem='$sem' ");
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
$query="INSERT INTO `iamarks` VALUES ('$sname','$regno','$sem','$subject','$f_internals','$s_internals','$t_internals','$total','$avg')";
if(mysqli_query($con,$query))
echo "<font face='cooper' color='blue' size='4 pt'>"."Uploaded Successfully..."."</font>";
else
echo "<font face='cooper' color='red' size='4 pt'>"."Error in uploading..."."</font>";
}
}
?>
 
<input type="submit" name="submit" value="submit"></br>
<input type="reset" value="reset">

</form>


</div>
</div>
</center>
<?php 
  include "footer.php";
 ?>
</body>
</html>


