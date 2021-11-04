<?php error_reporting(0);?>
<div id="nav">
			<div class="navlinks"><br/><br/>
					<?php $tname=$_GET['tname'];$branch=$_GET['branch']; echo'<a href="tpage.php?tname='.$tname.'&branch='.$branch.'  " class="navigation">HOME</a>';?><br/><hr color="white"><br/><br/>
					<?php $tname=$_GET['tname'];$branch=$_GET['branch']; echo'<a href="iaupload.php?tname='.$tname.'&branch='.$branch.'  " class="navigation">IA MARKS</a>';?><br/><hr color="white"><br/><br/>
					<?php $tname=$_GET['tname'];$branch=$_GET['branch']; echo'<a href="ttupload.php?tname='.$tname.'&branch='.$branch.'  " class="navigation">TIME TABLE</a>';?><br/><hr color="white"><br/><br/>
                                        <?php $tname=$_GET['tname'];$branch=$_GET['branch']; echo'<a href="attendupload.php?tname='.$tname.'&branch='.$branch.'  " class="navigation">ATTENDENCE</a>';?><br/><hr color="white"><br/><br/>
                                        <?php $tname=$_GET['tname'];$branch=$_GET['branch']; echo'<a href="memoupload.php?tname='.$tname.'&branch='.$branch.'  " class="navigation">NEWS AND EVENTS</a>';?><br/><hr color="white"><br/><br/>
				        <?php $tname=$_GET['tname'];$branch=$_GET['branch']; echo'<a href="supportsupload.php?tname='.$tname.'&branch='.$branch.'  " class="navigation">SUPPORTS</a>';?><br/><hr color="white"><br/><br/>	
</div>
</div>