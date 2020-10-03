<!--status1 for room booking management-->

<?php 
session_start();
$con=mysqli_connect('localhost','root','','hotelmanagement');
 $Sno = (isset($_POST['SNo']) ? $_POST['SNo'] : 'error');
 $Type = (isset($_POST['Type']) ? $_POST['Type'] : 'error');
 $ID = (isset($_POST['ID']) ? $_POST['ID'] : 'error');
 $Name = (isset($_POST['Name']) ? $_POST['Name'] : 'error');
 $Rno = (isset($_POST['NoRoom']) ? $_POST['NoRoom'] : 'error');
//$name=$_SESSION['name'];


if(isset($_POST['accept']))
{
       $query="UPDATE room SET Status =true WHERE SNo='$Sno'";
    mysqli_query($con,$query);
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/admin.php#room">';
    
   }
 else if(isset($_POST['pay']))
   {
     
     
      $query="UPDATE room SET Status ='paid' WHERE SNo='$Sno'"; $sel="select * from $Type";
   $num =mysqli_query($con,$sel);
    
     while($row=mysqli_fetch_assoc($num))
{
     
      $sno=$row['SNo'];
      if ($row['Availability']==1)
      {       
           $avail="UPDATE $Type SET  Availability =false,Name='$Name',ID='$ID'  WHERE SNo ='$sno' ";
           break ; 
      }
     
  }
       mysqli_query($con,$avail);
       mysqli_query($con,$query);
        echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/appointment.php#room">';
   }


else if (isset($_POST['free'])){
     
       $query="DELETE FROM room WHERE SNo ='$Sno'";
      $sel="select * from $Type";
      $num =mysqli_query($con,$sel);
    
     while($row=mysqli_fetch_assoc($num))
{
      $sno=$row['SNo'];
      if ($row['Availability']==0)
      {   
           $avail="UPDATE $Type SET  Availability =true,Name='',ID=''  WHERE SNo ='$sno'AND ID='$ID' AND Name='$Name' ";
           break ; 
      }
      
  }
     mysqli_query($con,$avail);
    mysqli_query($con,$query);
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/admin.php#expired">';
    
}


else if (isset($_POST['Rfree'])){
     
       $query="DELETE FROM room WHERE SNo ='$Sno'";
    mysqli_query($con,$query);
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/admin.php#rejected">';
    
}

   else if(isset($_POST['reject']))
   {
       $query="UPDATE room SET Status =false WHERE SNo='$Sno'";
       mysqli_query($con,$query);
        echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/admin.php#room">';
   }

else if(isset($_POST['add']))
   { $i=0;
    while($i<$Rno){
        $i++;
       $query="insert into $Type (Availability) values('1')";
       mysqli_query($con,$query);
    }
     echo "<script>alert('Room is added'); window.location.href='http://localhost/new/admin.php#add'; </script>";
 
   }
else if(isset($_POST['delete']))
   { $i=0;
    $sel="select * from $Type";
   $num =mysqli_query($con,$sel);
    while($row=mysqli_fetch_assoc($num))
{
      $sno=$row['SNo'];
    }
    echo $sno;
  
    while($i<$Rno){
        
       $query="DELETE  FROM $Type WHERE SNo='$sno'";
       mysqli_query($con,$query);
        $i++;
        $sno--;
        
    }
     echo "<script>alert('Room is deleted'); window.location.href='http://localhost/new/admin.php#add'; </script>";
 
   }

else {
    
    $query="UPDATE room SET Status ='cancel' WHERE SNo='$Sno'";
    mysqli_query($con,$query);
     echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/appointment.php#room">';
}



?>




