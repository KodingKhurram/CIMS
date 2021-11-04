<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
.tt
{
width: auto;
margin: auto;
text-align: center;
table-layout:fixed;
position: relative;
top: 20px;
}
.tt tr
{
padding: 20px;
color: #080808;
border: 2px solid #080808;
border-collapse: collapse;
font-size: 14px;
font-family: Arial;
background: white;
}
.tt td
{
padding: 20px;
color: #080808;
border: 2px solid #080808;
border-collapse: collapse;
font-size: 14px;
font-family: Arial black;
background: white;
}
.tt th
{
padding: 20px;
color: #080808;
border: 2px solid #080808;
border-collapse: collapse;
font-size: 14px;
font-family: clibri;
background: white;
}
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
.download
{
width: auto;
background: green;
color:white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
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
 <?php 
  include "snavigation.php";
 ?>
                 <div id="content">
<div class="table">		
<table align="center" class='tt'>
<?php
$branch=$_GET['branch'];
$files=scandir("supports/$branch");
for($f=2;$f<count($files);$f++)
{
echo "<tr align='center'>";
echo "<td>";
echo $files[$f];
echo "</td>";
echo "<td>";
echo "<a download='$files[$f]' href='supports/$branch/$files[$f]' >"."<input class='download' type='button' name='download' value='download' >"."</a>";
echo "</td>";
echo "</tr>";
}
?>
</table>
</div>
</div>
<?php 
  include "footer.php";
 ?>
</body>
</html>