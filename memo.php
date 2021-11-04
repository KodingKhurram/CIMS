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
.follow
{
width: 400px;
margin-left: 60%;
position: relative;
top: -55px;
}
.footer
{
height: 50px;
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
<div style="height: auto;" id="content">
<div class="memo">
<?php
$files=scandir("memo");
for($f=2;$f<count($files);$f++)
{
echo "<center>";
echo "<img height='950' width='950' src='memo/$files[$f]'>";
echo "</center>";
}?>
<div class="footer">
<hr size="3" color="black"/>
<div style="width: 400px;">
<p>
<font color=a0522d" face="times new roman" size="5 pt">Copy rights &copy sark production</font>
</p>
</div>
<div class="follow">
<font color="3300cc" face="times new roman" size="5 pt">Follow us on: </font>
&nbsp<a href="#"><img style="position: relative;top: 7px" src="images/youtube.png" height="30" width="30"></a>
&nbsp<a href="#"><img style="position: relative;top: 7px" src="images/fb.jpg" height="30" width="30"></a>
&nbsp<a href="#"><img style="position: relative;top: 7px" src="images/book (4).png" height="30" width="30"></a>
&nbsp<a href="#"><img style="position: relative;top: 7px" src="images/whatsapp.png" height="30" width="30"></a>
</div>
</div>
<hr size="3" color="black"/>