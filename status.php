<?php 
session_start();
$con=mysqli_connect('localhost','root','','hotelmanagement');
 $Sno = (isset($_POST['SNo']) ? $_POST['SNo'] : 'error');
//$name=$_SESSION['name'];
if(isset($_POST['accept']))
{
       $query="UPDATE events SET Status =true WHERE SNo='$Sno'";
       mysqli_query($con,$query);
       echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/admin.php#event">';
   }
   else if(isset($_POST['pay']))
   {
       $query="UPDATE events SET Status ='paid' WHERE SNo='$Sno'";
       mysqli_query($con,$query);
        echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/appointment.php#event">';
   }

else if(isset($_POST['reject']))
   {
       $query="UPDATE events SET Status =false WHERE SNo='$Sno'";
       mysqli_query($con,$query);
        echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/admin.php#event">';
   }
else if(isset($_POST['delete']))
   {
      
     $query="DELETE FROM events WHERE SNo ='$Sno'";
       mysqli_query($con,$query);
        echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/admin.php#E-expired">';
   }
else {
    
    $query="UPDATE events SET Status ='cancel' WHERE SNo='$Sno'";
    mysqli_query($con,$query);
     echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/appointment.php#event">';
}


?>
