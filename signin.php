 <?php  
 session_start();
if(isset($_POST["submit"])){  
  
if(!empty($_POST['email']) && !empty($_POST['password'])) {  
    $email=$_POST['email'];  
    $password=$_POST['password'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con, 'lawyer') or die(mysqli_error($con));  
  
    $query=mysqli_query($con,"SELECT * FROM users WHERE email='".$email. "'AND password='".$password."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($email == $dbusername && $password == $dbpassword)  
    {  
        $_SESSION['mail']=$email;
    

    echo "<script>window.location.assign('user homepage1.php');</script>";
; 
  
      
    }  
    } 
    else
     {  
    echo "invalid email or password!";  
    }  
  
}  
else {  
    echo "All fields are required!";  
}  
}  
?>  