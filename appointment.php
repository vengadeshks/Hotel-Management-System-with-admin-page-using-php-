<html>
    <head>
    <title>Booking History</title>
        <link rel="shortcut icon" type="image/x-icon" href="picture/hotel.png" />
         <link rel="stylesheet" type="text/css" href="style1.css" />
         <link  rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
         <style>
        *{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
   
}
h2{
    text-align: center;
    font-size: 28px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color:#324960 ;
    padding: 10px 0;
}
            
.navbar {
    display: flex;
    min-width: 800px;
    align-items: center;
    justify-content: space-between;
       background:#324960;
    background: ;
    padding: 0 20px;
    box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.8);
    border-radius: 20px;
    margin: 30px;
}
        
        
.navbar a{ 

     float: left;
     color:gainsboro;
     text-align: center;
     padding: 20px 10px;
     text-decoration: none ;
     font-size:18px;
    transition: 0.3s;
}
        .navbar a:hover {
            font-size:20px;
            color :  #f2f2f2;
            
        }

.navbar .con-logo {
    width: 100px;
}
        
        
.con-btns {
    display: flex;
   
}
             
/*        search box css*/
                        form.search input[type=text] {
                        padding: 10px;
                        font-size: 17px;
                        border: 1px solid grey;
                        float: left;
                            height:8%;
                        width: 80%;
                        background: #f1f1f1;
                        }

                        form.search button {
                        float: left;
                        width: 20%;
                             height:8%;
                        padding: 10px;
                        background: #999;
                        color: white;
                        font-size: 17px;
                        border: 1px solid grey;
                        border-left: none;
                        cursor: pointer;
                        }

                        form.search button:hover {
                        background: #324960 ;
                        }

                        form.search::after {
                        content: "";
                        clear: both;
                        display: table;
                        }

        div { display:none; }
        
div:target { display:block; }
        </style></head>
    <body>
 
<div class="navbar">
     <?php
        session_start();
        $name = $_SESSION["username"];
        ?>
    
       <div class="con-btns">
           <a id="logout" href="home1.php" ><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;Back</a>
          <a id="logout" href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;logout</a>
            
        </div>

        <a href="#room">Rooms Booking History</a>
        <a href="#event">Event Booking History</a>
    <p style=' float:right;
     color: #f2f2f2;
     text-align: center;
     margin-right: 20px;
     font-size:18px;'><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $name;?></p>
    
    </div>
        
        <div id='room'>
         <center> <h2 >BOOKING HISTORY</h2></center>
            <form class="search" method="post" style='float:right'>
                        <input type="text" placeholder="Search.." name="name"  />
                        <button type="submit" name='room'><i class="fa fa-search"></i></button>
                        </form>
    
    <table class='fl-table'>
  <tr>
    <th>S.no</th>
    <th>Name</th>
    <th>Type</th>
    <th>Checkin</th>
    <th>Checkout</th>
    <th>Status</th>
    <th>Payment</th>
  </tr>
    
  
    
    
    
    
    <?php
$count=0;
$con=mysqli_connect('localhost','root','','hotelmanagement');
$query="select SNo,ID,Name,Username,Checkin,Checkout,Type,Checkout,Status from room ";
$num=mysqli_query($con,$query);
                    
if(isset($_POST['room'])){
    $name=$_POST['name'];
   
    $sql=" SELECT * FROM room WHERE  Name like '%".$name."%' OR Type like '%".$name."%'";
    $num=mysqli_query($con,$sql);
}
else{
     $sql="select * from room  where username='$name'";
    $num=mysqli_query($con,$sql);
}
if(mysqli_num_rows($num)>0)
{  

    
  while($row=mysqli_fetch_assoc($num))
{
    $count = $count+1;
?>   
 
  <tr>
    <td><?php echo $count;?></td>
    <td><?php echo $row['Name'];?></td>
    <td><?php echo $row['Type'];?></td>
    <td><?php echo $row['Checkin'];?></td>
    <td><?php echo $row['Checkout'];?></td>
      <td><?php  if($row['Status'] == '0'){ echo "No room avilable";}  elseif($row['Status']== '1'){echo "Booked";}
      elseif($row['Status']== 'cancel'){echo "Cancelled by yourself";} 
      elseif($row['Status']== 'paid'){echo "Paid";} 
      else{ echo 'Pending'; }?></td>
<!--       <td>button class='btn'> Cancel  </button></td>-->
      <td> <?php if(($row['Status']=='Pending') )    { ?>

													
	                    <form method="POST" action='status1.php'><input type='hidden' name='SNo' value='<?php echo $row['SNo'] ?>'/> 
                    <input class='btn' type='submit' name='cancel' value='Cancel' onclick="return confirm('Are you sure ,do you want to cancel this Room Booking ?')" /> </form>
	                        <?php } 
      
    
                         
                         elseif(($row['Status']=='paid') ) {?>
 <form method="POST" action='pdf.php'><input type='hidden' name='SNo' value='<?php echo $row['SNo'] ?>'/> 
                    <input class='btn-acc' type='submit' name='room' value='Bill' onclick="return confirm('Are you sure ,do you want to generate bill ?')" /> </form>
                                    <?php }
                           elseif ($row['Status']==0) {

                                echo "Cancelled";
                                    }
                          else if ($row['Status']==1) {?>
                          <form method="POST" action='status1.php'>
                                <input type='hidden' name='SNo' value='<?php echo $row['SNo'] ?>'/>
                                <input type='hidden' name='Type' value='<?php echo $row['Type'] ?>'/> 
                                <input type='hidden' name='ID' value='<?php echo $row['ID'] ?>'/> 
                                <input type='hidden' name='Name' value='<?php echo $row['Name'] ?>'/>
                              
                    <input class='btn-acc' type='submit' name='pay' value='Pay' onclick="return confirm('Are you sure ,do you want to pay for this Booking ?')" /> </form>
                        
                             
                                   <?php  }  
                          else {

                                echo "Cancelled by yourself";
                                } 
                            ?>
                            
                            
            </td>
    <?php
}
}
else 
{
?>
   <tr><td colspan="7" style='color:red;'>No Rooms are booked </td></tr>
    <?php
   }
?>
   </table>
        
        
        </div>
        
        <div id ='event'> 
        <center> <h2 >BOOKING HISTORY</h2></center>
            <form class="search" method="post" style='float:right'>
                        <input type="text" placeholder="Search.." name="name"  />
                        <button type="submit" name='event'><i class="fa fa-search"></i></button>
                        </form>
    
    
    <table class='fl-table'>
  <tr>
    <th>S.no</th>
    <th>Name</th>
    <th>Type</th>
    <th>Time-In</th>
    <th>Time-Out</th>
    <th>Date</th>
    <th>Total</th>
    <th>Status</th>
    <th>Payment</th>
  </tr>
    
  
    
    
    
    
    <?php
$count=0;
$con=mysqli_connect('localhost','root','','hotelmanagement');
                              
if(isset($_POST['event'])){
    $name=$_POST['name'];
   
     $sql=" SELECT * FROM events WHERE Name like '%".$name."%' OR Type like '%".$name."%'";
    $num=mysqli_query($con,$sql);
}
else{
     $sql="select SNo,ID,Name,InTime,OutTime,username,Checkin,Type,Status,Total from events where username='$name'";
    $num=mysqli_query($con,$sql);
}
if(mysqli_num_rows($num)>0)
{  

    
  while($row=mysqli_fetch_assoc($num))
{
    $count = $count+1;
?>   
 
  <tr>
    <td><?php echo $count;?></td>
    <td><?php echo $row['Name'];?></td>
    <td><?php echo $row['Type'];?></td>
    <td><?php echo $row['InTime'];?></td>
    <td><?php echo $row['OutTime'];?></td>
    <td><?php echo $row['Checkin'];?></td>
    <td><?php echo $row['Total'];?></td>
      <td><?php  if($row['Status'] == '0'){ echo "No room avilable";}  elseif($row['Status']== '1'){echo "Booked";}
      elseif($row['Status']== 'cancel'){echo "Cancelled by yourself";} elseif($row['Status']== 'paid'){echo "Paid";} 
      else{ echo 'pending'; }?></td>
<!--       <td>button class='btn'> Cancel  </button></td>-->
      <td> <?php if(($row['Status']=='Pending') )    { ?>

													
	                    <form method="POST" action='status.php'><input type='hidden' name='SNo' value='<?php echo $row['SNo'] ?>'/> 
                    <input class='btn' type='submit' name='cancel' value='Cancel' onclick="return confirm('Are you sure,do you want to cancel this Event Booking?')" /> </form>
	                        <?php } 
                         
                         else if(($row['Status']=='paid') )  {?>

 <form method="POST" action='pdf.php'><input type='hidden' name='SNo' value='<?php echo $row['SNo'] ?>'/> 
                    <input class='btn-acc' type='submit' name='event' value='Bill' onclick="return confirm('Are you sure ,do you want to generate bill ?')" /> </form>
                                   <?php }
                            elseif ($row['Status']==0) {

                                echo "Cancelled";
                                    } 
                          else if ($row['Status']==1) {?>
          
                         <form method="POST" action='status.php'><input type='hidden' name='SNo' value='<?php echo $row['SNo'] ?>'/> 
                   <input class='btn-acc' type='submit' name='pay' value='Pay' onclick="return confirm('Are you sure,do you want to pay for this Booking?')" /> </form>
                      
                             
                                   <?php  }  
                          else {

                                echo "Cancelled by yourself";
                                } 
                            ?>
                            
                            
            </td>
    <?php
}
}
else 
{
?>
   <tr><td colspan="8" style='color:red;'>No Rooms are booked </td></tr>
    <?php
   }
?>
   </table>
  
        </div>

        
        </body>
    
</html>
