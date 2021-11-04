<style>
.profile input[type=submit]{
width: 100%;
background: green;
color:white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}
</style>
<div style="position :relative;display: inline-block;top: 25px;max-width: 550px;margin: auto;border-radius: 5px;border: 3px solid black;background: white;padding: 10px;left: 100px;" class="profile">
<?php
error_reporting(0);
$tname=$_GET['tname'];
$branch=$_GET['branch'];
?>
<center>
<?php echo "<img style='border-radius: 20px;border: 2px solid black;' src='profile pic/teachers/$tname$branch.jpg' height='200' width='300'>";?>
<br/><br/><br/>
</center>
<font face='cooper' size='5 pt' color='black'>Name:- </font>
<font face='times new roman' size='5 pt' color='black'><?php echo $tname;?></font>
<br/>
<font face='cooper' size='5 pt' color='black'>Branch:- </font>
<font face='times new roman' size='5 pt' color='black'><?php echo $branch;?></font>
<br/>
<div style='position: relative;'> 
<?php 
  include "tprofileupload.php";
?>
</div>
</center>
</div>