<?php
session_start();
$email=$_SESSION['email'];
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con, 'lawyer') or die(mysqli_error($con));  
  
$result=mysqli_query($con,"SELECT username FROM lawuser WHERE email='$email'");
$retrive=mysqli_fetch_array($result);
$username=$retrive['username'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>E-Legal Advisor</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">E-Legal Advisor</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="homepage.php" accesskey="1" title="">Homepage</a></li>
				<li><a href="lawyerownprofile.php" accesskey="2" title="">Profile</a></li>
				<li><a href="lawyerside.php" accesskey="3" title="">REFER A LAWYER</a></li>
			    <li><a href="lawcontactus.html" accesskey="4" title="">Contact Us</a></li>
			    <li><a href="logout.php" accesskey="5" title="">LOGOUT</a></li>
			</ul>
		</div>
	</div>
	<div class="log">
	 	
					<h2 style="color:white"><b>Login Successful! Hi Mr.<?php
					echo $username ?></b><h2>

			</div>
	<div id="banner">
		<div class="img-border"> <a href="#"><img src="cover image1.jpeg" width="1120" height="500" alt="" /></a> </div>
	</div>
</div>
<div id="wrapper">
	<div id="page-wrapper">
		<div id="page">
			<div id="content">
				<h2 style="color: #fb607f"><b>Welcome to E-legal advisor!</b></h2>
				
				<p><img src="justice.jpg" alt="" width="200" height="200" class="alignleft" /> As per the National Judicial Data Grid of India, there are over 31 million cases (out of which 23 million cases are more than a year old) pending in district and Taluk courts of India. The cases are lagging far behind. But our website will help to overcome this issue and a lot of young and talented lawyers will also be benefited as they can advertise their own details and the kind of experience they have, this enables them to reach a great number of cases than the traditional way getting the cases which would also increase their reputation faster than they could improve and the user will also have a wide variety of options in choosing their lawyers as they don't want to stick to one lawyer listen to his demands they could easily go for other options who they would like and will be perfect for them to move their cases forward. The users who do not have any clarity on how to approach a lawyer " E- Legal Advisor " would be a great help for them and as the ratings and reviews of the lawyers will also be given so user could choose a better lawyer for them.</p>
			</div>
			
		</div>
	</div>
</div>

<div id="footer" class="container">
	<p>&copy; Copyright</a>.</p>
</div>
</body>
</html>