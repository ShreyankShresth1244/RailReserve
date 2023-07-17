<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Indian Railways </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body>

	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php?value=0" class="btn btn-info">Signup</a>
			<?php } ?>
			
			
			</div>
			<div id="heading">
				<a href="index.php">Indian Railways</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="profile.php">PROFILE</a>
				</div>
			</div>
		</div>
		<div class="span12 well">
			<!-- Photos slider -->
			<div id="myCarousel" class="carousel slide" style="width:600px; float:left;margin-bottom:3px;">		
				<div class="carousel-inner">
				<div class="active item"><img src="images/6.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/7.jpg" style="width:600px;height:350px;"/> </div>
				<div class="item"><img src="images/8.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/9.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/10.jpg" style="width:600px;height:350px;"/> </div>
				<div class="item"><img src="images/11.png"style="width:600px;height:350px;"/></div>
				
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			<!-- News and Alert-->
			<div class="news" Style="float:right;" >
			<marquee behavior="scroll" id="marq"  scrollamount=3 direction="up" height="294px" onmouseover="nestop()" onmouseout="nestrt()">
				<div>
				<p><b><centre>THIS DATABASE MINI PROJECT IS MADE BY SHREYANK SHRESTH AND SAKET KRISHNA ON RAILWAY DATABASE MANAGEMENT</centre></b></p>
				</br>
				<p><b>WE HAVE USED HTML, CSS, JAVASCRIPT, MYSQL, PHP</b></p></br>
				<p><b>WE HAVE USED APACHE WEB SERVER TO HOST OUR WEBSITE</b></p></br>
				<p><b>WE ARE USING XAMPP TO INTERACT WITH OUR DATABASE AND WEBSITE USING PHP</b></p></br>
				<p><b>SHREYANK SHRESTH CSE D <br>REG NO.  210905360<br> ROLL NO.59</br></p></br> 
				<p><b>SAKET KRISHNA CSE D <br>REG NO. 210905316 <br>  ROLL NO.51</b></p></br>   
			
				
				</div>
			</marquee>
			</div>
		</div>
		
		<!-- Copyright -->
		<footer ></footer>
		<div style="width:100%;">
			<div style="float:left;">
			<p class="text-right text-info"> DBS MINIPROJECT LAB</p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info">	Desinged By : Shreyank Shresth & Saket Krishna</p>
			</div>
		</div>
		</footer>	</div>
	
</body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>