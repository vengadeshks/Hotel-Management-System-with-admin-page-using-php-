    <?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'hotelmanagement');
    
    $id = $_SESSION['ID'];
    $name=$_POST['Name'];
    $_SESSION['name']=$_POST['Name'];
    $uname=$_SESSION['username'];
    $city=$_POST['City'];
    $checkin=$_POST['Checkin'];
    $checkout=$_POST['Checkout'];
    $type=$_POST['Type'];
    $total=$_POST['Total'];
    $guest=$_POST['NoGuest'];
    $phoneno=$_POST['Phoneno'];
    


       


    $sel="select * from $type";
   
     $num =mysqli_query($con,$sel);
if(mysqli_num_rows($num)>0)
{  
  while($row=mysqli_fetch_assoc($num))
{
     $flag = false;
      $sno=$row['SNo'];
      if ($row['Availability']==1)
      { 
            $flag =true;
           $reg="insert into room (ID,NoGuest,Checkin,Checkout,Type,Total,Name,Username,PhoneNo,City,Status) values('$id','$guest','$checkin','$checkout','$type','$total','$name','$uname','$phoneno','$city', 'Pending') ";
          mysqli_query($con,$reg);
          break ; 
      }
     
      
      
  }
    if ($flag==false)
    {
        echo "<script>alert('No Rooms are available in this type ,plz select another type of room'); window.location.href='room.php'; </script>";
        
    }
      else {
//           header('location:appointment.php');
          echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/appointment.php#room">';
}
     
}
else {
    
    echo "Empty";
}

   



