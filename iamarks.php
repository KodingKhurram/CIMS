<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
.ia
{
width: auto;
margin: auto;
text-align: center;
table-layout:fixed;
position: relative;
top: 20px;
}
.ia tr
{
padding: 20px;
color: #080808;
border: 3px solid #080808;
border-collapse: collapse;
font-size: 14px;
font-family: Arial;
background: white;
}

.ia td
{
padding: 20px;
color: black;
border: 2px solid black;
border-collapse: collapse;
font-size: 18px;
font-family: calibri;
background: white;
}
.ia th
{
padding: 20px;
color: #080808;
border: 2px solid #080808;
border-collapse: collapse;
font-size: 16px;
font-family: Arial black;
background: a9a9a9;
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
include 'snavigation.php';?>
<div class="table">
<?php
$regno=$_GET['regno'];
$branch=$_GET['branch'];
$sname=$_GET['sname'];
$sem=$_GET['sem'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,$branch);
$result=mysqli_query($con,"SELECT * FROM iamarks WHERE regno='$regno' AND sem='$sem' ");
echo "<table class='ia'>";
echo "<tr'>";
echo "<th>"."SUBJECT"."</th>";
echo "<th>"."FIRST_INTERNALS"."</th>";
echo "<th>"."SECOND_INTERNALS"."</th>";
echo "<th>"."THIRD_INTERNALS"."</th>";
echo "<th>"."TOTAL_IA"."</th>";
echo "<th>"."AVG_IA"."</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['first_internals']."</td>";
echo "<td>".$row['second_internals']."</td>";
echo "<td>".$row['third_internals']."</td>";
echo "<td>".$row['total']."</td>";
echo "<td>".$row['avg_IA']."</td>";
echo "</tr>";
}
echo "</table>";
?>
</div>
</center>
</div>
<?php 
  include "footer.php";
?>
</body>