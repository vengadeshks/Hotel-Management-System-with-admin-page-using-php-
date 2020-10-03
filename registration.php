<?php
session_start();
$con=mysqli_connect('localhost','root','')or die("can't connect database");
mysqli_select_db($con,'hotelmanagement');
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$phoneno=$_POST['number'];

$s="select * from  signup where username='$username'";

$result=mysqli_query($con,$s)or die("can't fetch");
$num=mysqli_num_rows($result);
if ($num>0)
{
    echo("<script>alert('Already Exiting User-Name,Try Again!');
          window.location.href = 'sign-up.html';</script>");

}
else{

    $insert="insert into signup (username,password,email,phoneno) values('$username','$password','$email','$phoneno') " ;
    mysqli_query($con,$insert)or die('can not');
    echo("<script>alert('Registered Successfully!');
          window.location.href = 'login.html';</script>");
  
}
