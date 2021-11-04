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
<a href="index.php"><input type="submit" value="HOME">
</a>
</div>
<?php 
  include "header.php";
 ?>
<div id="content">
<div style="float: left;" class="contact">
<form method="post" action="http://localhost/sark/newloginvar.php">
user name:<input type="text" value="" name="tname"/><br/>
password:<input type="password" name="password"/><br/>
re-enter password:<input type="password" id="repwd"/><br/>
Branch:<select name="branch">
<option><i>Choose Branch</i></option>
							<option name='EEE'>Electrical & Electronic Engineering</option>
							<option name='CE'>Civil Engineering</option>
							<option name='ME'>Mechanical Engineering</option>
							<option name='CS'>Computer Science</option>
							<option name='IS'>Information Science</option>
</select><br/>
<input type="submit" value="create"/>
<input type="reset" value="reset"/>
</form>
<?php 
error_reporting(0);
if($_GET['error']==1)
echo "<font face='arial black' size='3 pt' color='red'>"."<center>"."sorry...!"."</center>"."Username and Password doesn't match"."</font>";
?>
</div>
<center><img style="position: relative;left: 20%;border-radius: 20px;border: 3px solid black;float: left;" height="450px" width="50%" src="images/teacher.jpg"></center>
</div>

<?php 
  include "footer.php";
 ?>

</body>
<html>