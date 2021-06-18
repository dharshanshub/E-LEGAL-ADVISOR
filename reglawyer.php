<?php



$username =$_POST['username'];
$monumber=$_POST['monumber'];
$barcouncil=$_POST['barcouncil'];
$courts =$_POST['courts'];
$cases =$_POST['cases'];
$wins =$_POST['wins'];
$exp =$_POST['exp'];
$email =$_POST['email'];
$password1 =$_POST['password1'];
$password2 =$_POST['password2'];
$det =$_POST['det'];





if (!empty($username) || !empty($monumber)|| !empty($barcouncil) ||!empty($courts) || !empty($email)|| !empty($password1) || !empty($password2) || !empty($cases) || !empty($exp) || !empty($wins))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "lawyer";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From lawuser Where email = ? Limit 1";
  $INSERT = "INSERT Into lawuser (username , monumber ,barcouncil, courts , cases , wins , experience , email , password1 , password2 , details)values(?,?,?,?,?,?,?,?,?,?,?)"; 

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssssssss", $username,$monumber,$barcouncil,$courts,$cases,$wins,$exp,$email,$password1,$password2,$det);
      $stmt->execute();

      echo "<script>window.location.assign('regsuccess.html');</script>";
     } 
     else {
      echo "this username is aldready in use";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}



?>