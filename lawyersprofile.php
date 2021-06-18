
<html>
<head><title> PROFILE</title>
	<link href="userhompage.css" rel="stylesheet" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />


</head>
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
    <div class="mass">
    <h1 style="text-align: center;color:white;"><b>LAWYERS</b></h1>
   </div>


   <body>
    <?php
    session_start();
    $email=$_SESSION['mail'];
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con, 'lawyer') or die(mysqli_error($con));

    
    
        $result1=mysqli_query($con,"SELECT username,mobileno FROM users WHERE email='$email'");
        $retrive1=mysqli_fetch_array($result1);
        $username1=$retrive1['username'];
        $cusmob=$retrive1['mobileno'];
    $data = mysqli_query($con,'SELECT COUNT(*) AS num FROM `lawuser`') or die(mysqli_error());
    $row = mysqli_fetch_assoc($data);
    $id = $row['num'];



    for ($x = 1; $x <=$id; $x+=1){



              
        $result=mysqli_query($con,"SELECT username,monumber,barcouncil,courts,cases,wins,experience,email,details,id FROM lawuser WHERE id='$x'");
        $retrive=mysqli_fetch_array($result);
        $username=$retrive['username'];
        $monumber=$retrive['monumber'];
        $barcouncil=$retrive['barcouncil'];
        $courts=$retrive['courts'];
        $cases=$retrive['cases'];
        $exp=$retrive['experience'];
        $email=$retrive['email'];
        $det=$retrive['details'];
        $wins=$retrive['wins'];
        include 'profilecard.php';
       
        

}
 $result2=mysqli_query($con,"SELECT username,email FROM lawuser WHERE id='5'");
 $retrive2=mysqli_fetch_array($result2);
        $username2=$retrive2['username'];
        $email2=$retrive2['email'];

if(isset($_POST['button_pressed'])){
            $subject ='NEW CASE';
                $body ='HELLO MR.'.$username2.':
                          Congratulations! A client is intrested in your profile and ready to
                          discuss thier case with you  ,please contact the number below

                                           '.$username1.'
                                           '.$cusmob.'
           "IF YOUR BUSY WITH A  ANOTHER CASE PLEASE REFER A OTHER LAWYER ON OUR WEBSITE"
                                        HAVE A NICE DAY!
   

                                                                                 regards,
                                                                                    E-LEGAL ADVISOR';
                $sender = "From:elegaladvisor123@gmail.com";

                if(mail($email2, $subject, $body, $sender)){
                    echo "<script>window.location.assign('useremailsuccess.html');</script>";
                }else{
                    echo "<script>window.location.assign('useremailfailed.html');</script>";
                }

        }
 ?>
</body>
</div>
</section>
</html>