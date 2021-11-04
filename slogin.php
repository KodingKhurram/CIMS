<html>
<head>
<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
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
<form method="post" action="http://localhost/sark/sloginvar.php">
<h1>LOGIN HERE</h1>
<table align='center'>
				<tr>
				                    <td>
						<input type='text' class='input' name='name' placeholder="Studentname">
					</td>
				</tr>
				<tr>
					
					<td>
						<input type='text' class='input' name='regno' placeholder="REG_NO">
					</td>
				</tr>
				<tr>
					
					<td>
						<select class='input' name='branch'>
							<option><i>Choose Branch</i></option>
							<option name='EEE'>Electrical & Electronic Engineering</option>
							<option name='CE'>Civil Engineering</option>
							<option name='ME'>Mechanical Engineering</option>
							<option name='CS'>Computer Science</option>
							<option name='IS'>Information Science</option>
						</select>
					</td>
				</tr>
<tr>

<td>
<select class='input' name='sem'>
							<option><i>Choose sem</i></option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
                            <option>6</option>
						</select></td></tr>
                                <br/><tr>
					<td>
                                        <input type='submit' class='input' name='submit' value='submit'>
                                        </td>                                                                      <tr>
      			              <td>
						<input type='reset' class='input' name='submit' value='reset'>
					</td>
				</tr>
			</table>
<?php 
error_reporting(0);
if($_GET['error']==1)
echo "<font face='arial black' size='3 pt' color='red'>"."<center>"."sorry...!"."</center>"."You are not the student of this college"."</font>";
?>
</form>
</div>
<center><img style="position: relative;left: 20%;border-radius: 20px;border: 3px solid black;float: left;" height="450px" width="50%" src="slider/business-college-composition-419635.jpg"></center>
</div>

<?php 
  include "footer.php";
 ?>

</body>
</html>

