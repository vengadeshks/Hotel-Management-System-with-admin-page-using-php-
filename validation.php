<?php
session_start();
$con=mysqli_connect('localhost','root','')or die("can't connect");
mysqli_select_db($con,'hotelmanagement');
$username=$_POST['username'];
$password=$_POST['password'];
$s="select * from  signup where username='$username' && password ='$password'";
$result=mysqli_query($con,$s) or die ('failed to query');
$row=mysqli_fetch_array($result);

if(($row['username']==$username) && ($row['password']==$password))
{
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['ID']=$row['ID'];
   
    echo("<script>alert('Login Successfully!');
          window.location.href = 'home1.php';</script>");
        
//    header('location:home1.php');
}
else{
	echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'login.html';</script>");
} 

