<?php
// this password may come from any source.
// it's a variable for the sake of simplicity
$username='venky';
$password = '123';

if($_POST['password'] == $password & $_POST['username'] == $username  ){
   
    header('location:http://localhost/new/admin.php#user');
    
}else{
  // handle no login
       echo("<script>alert('username and password is mismatched !');
          window.location.href = 'admin.html';</script>");
}
?>