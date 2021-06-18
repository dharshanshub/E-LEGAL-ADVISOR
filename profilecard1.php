<!DOCTYPE html>
<html>
<head>
    <link href="userhompage.css" rel="stylesheet" />
    <style>
   input[type=submit] {
  background-color:black;
  border: white;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
    border-radius: 25px;
  margin: 4px 2px;
  cursor : pointer;
}
input:hover[type="submit"] 
        {
            background:  #6B85FF;
        }

</style>
</head>

<body>


   	<div class="mass">
   	<h1 style="text-align: center;"><b></b></h1>
   </div>

	<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/ios-filled/100/ffffff/lawyer.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600"><?php echo $username ?></h6>
                                 <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 style="text-align: center;" class="m-b-20 p-b-5 b-b-default f-w-600"><b>PROFILE<b></h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><B>EMAIL</B></p>
                                        <h6 class="text-muted f-w-400"><?php echo $email?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><B>MOBILE</B></p>
                                        <h6 class="text-muted f-w-400"><?php echo $monumber ?></h6>
                                    </div>
                                </div>
                               <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><B>BAR COUNCIL</B></p>
                                        <h6 class="text-muted f-w-400"><?php echo $barcouncil ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><B>CASES/WINS</B></p>
                                        <h6 class="text-muted f-w-400"><?php echo $cases ?>/<?php echo $wins ?></h6>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><B>EXPERIENCE</B></p>
                                        <h6 class="text-muted f-w-400"><?php echo $exp ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><B>DETAILS</B></p>
                                        <h6 class="text-muted f-w-400"><?php echo $det ?></h6>
                                    </div>
                                </div>
                                <div class=button1>
                                    <form name="form4" action="lawyerside.php" method="post">
                                        <input type="submit" value="Refer lawyer" />
                                        <input type="hidden" name="button_onpressed" value="1" />
                                         </form>
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