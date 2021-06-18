<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['email']) && !empty($_POST['password1'])) {  
    $email=$_POST['email'];  
    $password=$_POST['password1'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con, 'lawyer') or die(mysqli_error($con));  
  
    $query=mysqli_query($con,"SELECT * FROM lawuser  WHERE email='".$email. "'AND password1='".$password."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['email'];  
    $dbpassword=$row['password1'];  
    }  
  
    if($email == $dbusername && $password == $dbpassword)  
    {  
    session_start();  
    $_SESSION['email']=$email;

    echo "<script>window.location.assign('homepage.php');</script>";
  
      
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