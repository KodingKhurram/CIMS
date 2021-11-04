<html>
 <head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
<a href="index.php"><input type="submit" value="HOME">
</a>
</div>
<?php 
  include "header.php";
 ?>
<div id="content">
<?php
$files=scandir("campus");
for($f=2;$f<count($files);$f++)
{
echo "<center>";
echo "<img height='950' width='950' src='memo/$files[$f]'>";
echo "</center>";
}?>
</div>
<?php 
  include "footer.php";
 ?>
 </body>
</html>
