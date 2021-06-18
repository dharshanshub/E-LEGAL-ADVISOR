<?php



$username =$_POST['username'];
$mobileno=$_POST['mobileno'];
$aadharno=$_POST['aadharno'];
$email =$_POST['email'];
$password =$_POST['password'];
$password2 =$_POST['password2'];






if (!empty($username) || !empty($mobileno)|| !empty($aadharno)|| !empty($email)|| !empty($password) || !empty($password2))
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
  $SELECT = "SELECT email From users Where email = ? Limit 1";
  $INSERT = "INSERT Into users (username , mobileno ,aadharno , email , password ,password2)values(?,?,?,?,?,?)";

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
      $stmt->bind_param("siisss", $username,$mobileno,$aadharno,$email,$password,$password2);
      $stmt->execute();
      echo "<script>window.location.assign('regsuccess.html');</script>";
     } else {
      echo "this mail id is aldready in use";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}


?>