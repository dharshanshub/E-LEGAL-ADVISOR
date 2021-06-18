<?php
session_start();
$email=$_SESSION['mail'];

    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con, 'lawyer') or die(mysqli_error($con));  
$result=mysqli_query($con,"SELECT username,mobileno,aadharno FROM users WHERE email='$email'");
$retrive=mysqli_fetch_array($result);
$username=$retrive['username'];
$mobileno=$retrive['mobileno'];
$aadharno=$retrive['aadharno'];
?>
<html>
<head><title> PROFILE</title>
    <link rel="stylesheet" type="text/css" href="./css/complaint.css">

	<link href="userhomestyle.css" rel="stylesheet" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="./css/complaint.css">

</head>
<header>
<section class="lemon">
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">E-Legal Advisor</a></h1>

		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="user homepage1.php" accesskey="1" title="">Homepage</a></li>
				<li><a href="userprofile.php" accesskey="2" title="">Profile</a></li>
				<li><a href="lawyersprofile.php" accesskey="3" title="">Lawyers</a></li>
			    <li><a href="contactus.html" accesskey="4" title="">Contact Us</a></li>
			     <li><a href="logout.php" accesskey="5" title="">LOGOUT</a></li>

			</ul>

			
		</div>
		
	</div>
</section>
</div>
</section>
</header>


   
   	<div class="mass">
   	<h1 style="text-align: center;color:white"><b>MY PROFILE</b></h1>
   </div>

	<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600"><?php echo $username ?></h6>
                                 <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 style="text-align: center;" class="m-b-20 p-b-5 b-b-default f-w-600"><b>PROFILE</b></h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><B>EMAIL</B></p>
                                        <h6 class="text-muted f-w-400"><?php echo $email?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><B>MOBILE</B></p>
                                        <h6 class="text-muted f-w-400"><?php echo $mobileno ?></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><B>AADHAR NUMBER</B></p>
                                        <h6 class="text-muted f-w-400"><?php echo $aadharno ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><b>PROFILE TYPE</b></p>
                                        <h6 class="text-muted f-w-400">CLIENT</h6>
                                    </div>
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
	

</html>
