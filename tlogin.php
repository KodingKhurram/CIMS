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
<div  style="float: left;" class="contact">
<form method="post" action="http://localhost/sark/tloginvar.php" >
<h1>LOGIN HERE</h1>
<input type="text" name="tname" placeholder="username"/>

<input type="password" name="pword" placeholder="password"/>

<select class='input' name='branch' >
							<option><i>Choose Branch</i></option>
							<option name='EEE'>Electrical & Electronic Engineering</option>
							<option name='CE'>Civil Engineering</option>
							<option name='ME'>Mechanical Engineering</option>
							<option name='CS'>Computer Science</option>
							<option name='IS'>Information Science</option>
						</select>

<input type="submit" value="login"/>
</form>

<a href='newlogin.php?error=0  '>
<input type="submit" value="Don't Have an Account?Create a New Account"/>
</a>
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
</html>

