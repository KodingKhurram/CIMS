<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/tlogin.css">
<style>
input[type=submit]{
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
  include "snavigation.php";
?>
<?php 
  include "sprofile.php";
?>
<?php 
  include "swelcome.php";
?>
</div>

<?php 
  include "footer.php";
?>
</body>
</html>