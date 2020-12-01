<?php session_start();

if(isset($_SESSION['email']))
{
    $var1=$_SESSION['email'];
    
}
else {
    $var1="nun";
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="eng" lang="eng">

<!-- Mirrored from adraft.x10.mx/space-404/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 20:39:50 GMT -->
<head>
   <link rel="icon" type="image/png" href="images/vv.png">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Lost in Space - Error 404</title>
	<link href='http://fonts.googleapis.com/css?family=Bangers&amp;v2' rel='stylesheet' type='text/css' />	
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script src="scripts/jquery162.js" type="text/javascript"></script>
	<script src="scripts/spritely05.js" type="text/javascript"></script>

	
</head>
<body onload="PlaySound('mySound')" >


<div id="container">

	<div id="stage" class="stage">
		<div id="space" class="stage"></div>
		<div id="astronaut" class="stage">
			<div id="text_1">Houston,<br />we have a<br />problem!</div>
			<div id="text_2">password!!</div>
			<div id="text_3">Allah<br />y3fo 3lik <br />Haaach!!</div>
			<div id="text_4"><?php echo $var1 ?></div>
			<div id="text_5">
				<ul>
					<li><a href="imagine/index.php">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="../#about-section">Services</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Portfolio</a></li>
				</ul>
			</div>
			<div class="search_box">
				<form id="searchform" action="#" method="get">
					<input id="s" class="inputField" type="text" name="s" onblur="if (this.value == '') {this.value = 'Or search for new one...';}" onfocus="if (this.value == 'Or search for new one...') {this.value = '';}" value="Or search for new one..." />
					<input id="searchsubmit" class="btn-search" type="submit" value="" />
				</form>
			</div>
		</div>
	</div>
</div>
<audio id='mySound' src='http://upload.wikimedia.org/wikipedia/commons/6/6f/Cello_Live_Performance_John_Michel_Tchaikovsky_Violin_Concerto_3rd_MVT_applaused_cut.ogg'/>

<script type="text/javascript">
		(function($) {
			$(document).ready(function() {			
				$('#astronaut')
					.sprite({fps: 30, no_of_frames: 1})
					.spRandom({top: 30, bottom: 200, left: 30, right: 200})
				$('#space').pan({fps: 40, speed: 3, dir: 'right', depth: 50});
			});
		})(jQuery);	
		function PlaySound(soundobj) {
		    var thissound=document.getElementById(soundobj);
		    thissound.play();
		}

		function StopSound(soundobj) {
		    var thissound=document.getElementById(soundobj);
		    thissound.pause();
		    thissound.currentTime = 0;
		}
	</script>
</body>

<!-- Mirrored from adraft.x10.mx/space-404/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 20:39:51 GMT -->
</html>
