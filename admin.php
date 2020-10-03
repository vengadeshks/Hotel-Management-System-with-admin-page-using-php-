
    <!DOCTYPE html>
    <html>
    <head>
    <title>Admin Page</title>
    <link rel="shortcut icon" type="image/x-icon" href="picture/hotel.png" />
    <link rel="stylesheet" type="text/css" href="style1.css" />
    <link  rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

    <style>


            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
            }
            body{
            font-family: Helvetica;
            -webkit-font-smoothing: antialiased;
            background: #f1f3f6;

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
            background: #fff;
            padding: 0 20px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.8);
            border-radius: 20px;
            margin: 30px;
            }


            .navbar a{ 

            float: left;
            color:darkgray;
            text-align: center;
            padding: 20px 10px;
            text-decoration: none ;
            font-size:18px;
            transition: 0.3s;
            }
            .navbar a:hover {
            font-size:20px;
            color : black;

            }

            .navbar .con-logo {
            width: 100px;
            }


            .navbar .con-btns {
            display: flex;
            align-items: center;
            justify-content: center;
            }

            .navbar button {
            padding: 12px 30px;
            color: #fff;
            background: #000;
            border: 0;
            outline: none;
            border-radius: 18px;
            cursor: pointer;
            margin-left: 10px;
            }
            .adduser{
            width:380px;
            height:390px;
            position:relative;
            margin:5% auto;
            background: white;
            box-shadow: 0 0 10px gray;
            padding: 5px;
            border-radius:30px;
            overflow: hidden;
}
        
 .input-field{

            padding:10px 10px;
            margin:20px 50px;
            width :70%;
            border-bottom: 1px solid #999;
            border-top:0;
             border-right:0;
             border-left:0;
            background: transparent;
            outline:none;
         
            
        }
          .input-label{
            font-size:20px;
            padding:20px 20px;
            margin:20px 25px;
            width :50%;
            
            
        }
/*        search box css*/
                        form.search input[type=text] {
                        padding: 10px;
                        font-size: 17px;
                        border: 1px solid grey;
                        float: left;
                        width: 80%;
                        background: #f1f1f1;
                        }

                        form.search button {
                        float: left;
                        width: 20%;
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
    <p class="con-logo"> <img src="picture/hotel.png" width=40px height="30px"> </p>


    <a href="#room"  role="tab" data-toggle="list" aria-controls="home">Room Booking</a>
    <a href="#event"  role="tab" data-toggle="list" aria-controls="home">Event Booking</a>
    <a href="#user">User Details</a>
    <a href="#paid">Paid Rooms</a>
    <a href="#expired">Expired Rooms</a>
    <a href="#rejected">Rejected Rooms</a>
    <a href="#E-expired">Expired Events</a>
    <a href="#add">Add Rooms</a>


    <div class="con-btns">
    <button onclick="javascript:logout()">Logout</button>

    </div>
    <script>
    function logout(){
    location.href = "admin.html";

    }

    </script>


    </div>
<!--        ROOMS BOOKING LIST-->

        <div id ="room">
             <center> <h2>ROOM BOOKING </h2></center>
                 
<form class="search" method="post" style='float:right'>
    <input type="text" placeholder="Search.." name="name"  />
    <button type="submit" name='room'><i class="fa fa-search"></i></button>
</form>
       
        <table class="fl-table" >
        <tr>
        <th>S No</th>
        <th>Username</th>
        <th>Name</th>
        <th>Type</th>
        <th>No Guest</th>
        <th>Checkin</th>
        <th>Checkout</th>
        <th>Phone No</th>
        <th>City</th>
        <th>Total</th>
        <th>Action</th>
        </tr>
        <?php
//        session_start();
        $count=0;
        $con=mysqli_connect('localhost','root','','hotelmanagement');
                  
if(isset($_POST['room'])){
    $name=$_POST['name'];
   
    $sql=" SELECT * FROM room WHERE Username like '%".$name."%' OR Name like '%".$name."%' OR Type like '%".$name."%'";
    $num=mysqli_query($con,$sql);
}
else{
     $sql="select * from room ";
    $num=mysqli_query($con,$sql);
}
        if(mysqli_num_rows($num)>0)
        {
        while($row=mysqli_fetch_assoc($num))
        {
        $count = $count+1;
        ?>   

        <tr>
        <td><?php echo $count?></td>
        <td><?php echo $row['Username'];?></td>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Type'];?></td>
        <td><?php echo $row['NoGuest'];?></td>
        <td><?php echo $row['Checkin'];?></td>
        <td><?php echo $row['Checkout'];?></td>
        <td><?php echo $row['PhoneNo'];?></td>
        <td><?php echo $row['City'];?></td>
        <td><?php echo $row['Total'];?></td>


        <td>

        <?php  if($row['Status'] == '0' ){ echo"cancelled" ;?>
        <?php } else if($row['Status']=='1'){ echo"Granted" ;?>
        <?php } else if($row['Status']=='paid'){ echo"paid" ;?>

        <?php  } else if ($row['Status']=='Pending'){ ?> <form method="POST" action='status1.php'>
        <input type='hidden' name='SNo' value='<?php echo $row['SNo'] ?>'/> 
        <input type='hidden' name='Type' value='<?php echo $row['Type'] ?>'/> 
        <input type='hidden' name='ID' value='<?php echo $row['ID'] ?>'/> 
        <input type='hidden' name='Name' value='<?php echo $row['Name'] ?>'/> 
        <input class='btn-acc'type='submit' name='accept' value='Accept' />
        <input  class='btn' type='submit' name='reject' value='Reject' /></form>
        <?php  } else { echo"Cancelled by user";  } ?>
        <!--            0-admin cancel ,1-admin accept , pending-processing ,cancel-cancel by user-->

        </td>
        <!--       0-admin cancel ,1-admin accept , pending-processing ,cancel-cancel by user-->
        <?php
        }
        }      
        else 
        {
        ?>
        <tr><td colspan="11" style='color:red;'>No Rooms are booked </td></tr>
        <?php
        }
        ?>
        </table>


        </div>

                <!--EVENT BOOKING LIST-->
                    <div id="event">
                    <center> <h2>Event Booking</h2></center>

                        <form class="search" method="post" style='float:right'>
                        <input type="text" placeholder="Search.." name="name"  />
                        <button type="submit" name='event'><i class="fa fa-search"></i></button>
                        </form>
                    <table class="fl-table" >
                    <tr>
                    <th>S No</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>No Guest</th>
                    <th>Date</th>
                    <th>In Time</th>
                    <th>Out Time</th>
                    <th>Phone No</th>
                    <th>City</th>
                        <th>Total</th>
                    <th>Action</th>
                    </tr>
                    <?php
                    // session_start();
                    $count=0;
                    $con=mysqli_connect('localhost','root','','hotelmanagement');
//                    $query="select * from events";
//                    $num=mysqli_query($con,$query);
                               
if(isset($_POST['event'])){
    $name=$_POST['name'];
   
     $sql=" SELECT * FROM events WHERE username like '%".$name."%' OR Name like '%".$name."%' OR Type like '%".$name."%'";
    $num=mysqli_query($con,$sql);
}
else{
     $sql="select * from events";
    $num=mysqli_query($con,$sql);
}
                    if(mysqli_num_rows($num)>0)
                    {
                    while($row=mysqli_fetch_assoc($num))
                    {
                    $count = $count+1;
                    ?>   

                    <tr>
                    <td><?php echo $count?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Type'];?></td>
                    <td><?php echo $row['NoGuest'];?></td>
                    <td><?php echo $row['Checkin'];?></td>
                    <td><?php echo $row['InTime'];?></td>
                    <td><?php echo $row['OutTime'];?></td>
                    <td><?php echo $row['Phone'];?></td>
                    <td><?php echo $row['City'];?></td>
                        <td><?php echo $row['Total'];?></td>

                    <td>

                    <?php  if($row['Status'] == '0' ){ echo"cancelled" ;?>
                    <?php } else if($row['Status']=='1'){ echo"Granted" ;?>

                    <?php  } else if ($row['Status']=='Pending'){ ?> <form method="POST" action='status.php'><input type='hidden' name='SNo' value='<?php echo $row['SNo'] ?>'/> 
                    <input class='btn-acc'type='submit' name='accept' value='Accept' />
                    <input  class='btn' type='submit' name='reject' value='Reject' /></form>
                    <?php  } else if ($row['Status']=='paid'){ echo 'Paid'; } else { echo"Cancelled by user";  } ?>
                    <!--            0-admin cancel ,1-admin accept , pending-processing ,cancel-cancel by user-->

                    </td>

                    <?php
                    }
                    }

                    else 
                    {
                    ?>
                    <tr><td colspan="12" style='color:red;'>No Events are booked </td></tr>
                    <?php
                    }
                    ?>
                    </table>


                    </div>
<!--        SIGN UP TABLE-->
    <div id="user">
      
<form class="search" method="post" style='float:right'>
    <input type="text" placeholder="Search.." name="name"  />
    <button type="submit" name='user'><i class="fa fa-search"></i></button>
</form>

    <table class="fl-table" >
    <tr>
    <th>Sno</th>
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Action</th>

    </tr>
    <?php
    // session_start();
    $count=0;
    $con=mysqli_connect('localhost','root','','hotelmanagement');
//         $sql="SELECT * FROM signup";
//    $num=mysqli_query($con,$sql);
        
if(isset($_POST['user'])){
    $name=$_POST['name'];
   
    $sql=" SELECT * FROM signup WHERE username like '%".$name."%' OR email like '%".$name."%'";
//      $sql="SELECT * FROM signup";
    $num=mysqli_query($con,$sql);
}
else{
     $sql="SELECT * FROM signup";
    $num=mysqli_query($con,$sql);
}
    if(mysqli_num_rows($num)>0)
    {
    while($row=mysqli_fetch_assoc($num))
    {
    $count = $count+1;
    ?>   

    <tr>
    <td><?php echo $count?></td>
    <td><?php echo $row['ID'];?></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['password'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['phoneno'];?></td>
    <td>
    <form action="" method="post">
    <input type='hidden' name='ID' value='<?php echo $row['ID'] ?>'/> 
    <input class='btn' type='submit' name='delete' value='Delete'  /></form>
    </td>
    <?php } ?>

    </tr>
    </table> <?php } ?>

    </div>

                <!--        Paid list-->
                <div id ="paid">
                    <center> <h2>PAID LIST </h2></center>
                <table class="fl-table" >
                <tr>
                <th>S No</th>
                <th>Username</th>
                <th>Name</th>
                <th>Type</th>
                <th>No Guest</th>
                <th>Checkin</th>
                <th>Checkout</th>
                <th>Phone No</th>
                <th>City</th>
                <th>Total</th>
                <th>Action</th>
                </tr>
                <?php

                $count=0;
                $con=mysqli_connect('localhost','root','','hotelmanagement');
                $query="select * from room WHERE Status='paid' ";
                $num=mysqli_query($con,$query);
                    
                if(mysqli_num_rows($num)>0)
                {
                while($row=mysqli_fetch_assoc($num))
                {
                $count = $count+1;
                ?>   

                <tr>
                <td><?php echo $count?></td>
                <td><?php echo $row['Username'];?></td>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Type'];?></td>
                <td><?php echo $row['NoGuest'];?></td>
                <td><?php echo $row['Checkin'];?></td>
                <td><?php echo $row['Checkout'];?></td>
                <td><?php echo $row['PhoneNo'];?></td>
                <td><?php echo $row['City'];?></td>
                <td><?php echo $row['Total'];?></td>


                <td>

                <?php  if($row['Status'] == '0' ){ echo"cancelled" ;?>
                <?php } else if($row['Status']=='1'){ echo"Granted" ;?>
                <?php } else if($row['Status']=='paid'){ echo"paid" ;?>

                <?php  } else if ($row['Status']=='Pending'){ ?> <form method="POST" action='status1.php'>
                <input type='hidden' name='SNo' value='<?php echo $row['SNo'] ?>'/> 
                <input type='hidden' name='Type' value='<?php echo $row['Type'] ?>'/> 
                <input type='hidden' name='ID' value='<?php echo $row['ID'] ?>'/> 
                <input type='hidden' name='Name' value='<?php echo $row['Name'] ?>'/> 
                <input class='btn-acc'type='submit' name='accept' value='Accept' />
                <input  class='btn' type='submit' name='reject' value='Reject' /></form>
                <?php  } else { echo"Cancelled by user";  } ?>
                <!--            0-admin cancel ,1-admin accept , pending-processing ,cancel-cancel by user-->

                </td>
                <!--       0-admin cancel ,1-admin accept , pending-processing ,cancel-cancel by user-->
                <?php
                }
                }      
                else 
                {
                ?>
                <tr><td colspan="11" style='color:red;'>No Rooms are booked </td></tr>
                <?php
                }
                ?>
                </table>


                </div>




<!--EXPIRED ROOM LIST-->

    <div id='expired'>

    <center> <h2>EXPIRED LIST </h2></center>
    <table class="fl-table" >
    <tr>
    <th>S No</th>
    <th>Username</th>
    <th>Name</th>
    <th>Type</th>
    <th>No Guest</th>
    <th>Checkin</th>
    <th>Checkout</th>
    <th>Phone No</th>
    <th>City</th>
    <th>Total</th>
    <th>Room Allocation</th>
    </tr>
    <?php

    $count=0;
    $con=mysqli_connect('localhost','root','','hotelmanagement');
    $query="SELECT * FROM room WHERE Checkout < CURDATE() AND Status='paid' ";

    $num=mysqli_query($con,$query);
    if(mysqli_num_rows($num)>0) 
    {
    while($row=mysqli_fetch_assoc($num))
    {
    $count = $count+1;
    ?>   

    <tr>
    <td><?php echo $count?></td>
    <td><?php echo $row['Username'];?></td>
    <td><?php echo $row['Name'];?></td>
    <td><?php echo $row['Type'];?></td>
    <td><?php echo $row['NoGuest'];?></td>
    <td><?php echo $row['Checkin'];?></td>
    <td><?php echo $row['Checkout'];?></td>
    <td><?php echo $row['PhoneNo'];?></td>
    <td><?php echo $row['City'];?></td>
    <td><?php echo $row['Total'];?></td>


    <td>

    <form action="status1.php" method="post">

    <input type='hidden' name='SNo' value='<?php echo $row['SNo'] ?>'/> 
    <input type='hidden' name='Type' value='<?php echo $row['Type'] ?>'/> 
    <input type='hidden' name='ID' value='<?php echo $row['ID'] ?>'/> 
    <input type='hidden' name='Name' value='<?php echo $row['Name'] ?>'/>

    <input class='btn-acc' type='submit' name='free' value='Free'  /></form>
    </td>



    <!--       0-admin cancel ,1-admin accept , pending-processing ,cancel-cancel by user-->
    <?php
    }
    }      
    else 
    {
    ?>
    <tr><td colspan="11" style='color:red;'>No Expired Rooms  </td></tr>
    <?php
    }
    ?>
    </table>


    </div>

            <!--        REJECTED ROOM LIST-->
                <div id='rejected'>

                <center> <h2>REJECTED LIST </h2></center>
                <table class="fl-table" >
                <tr>
                <th>S No</th>
                <th>Username</th>
                <th>Name</th>
                <th>Type</th>
                <th>No Guest</th>
                <th>Checkin</th>
                <th>Checkout</th>
                <th>Phone No</th>
                <th>City</th>
                <th>Total</th>
                <th>Room Allocation</th>
                </tr>
                <?php

                $count=0;
                $con=mysqli_connect('localhost','root','','hotelmanagement');
                $query="SELECT * FROM room WHERE Status='0' OR Status='cancel' ";

                $num=mysqli_query($con,$query);
                if(mysqli_num_rows($num)>0)
                {
                while($row=mysqli_fetch_assoc($num))
                {
                $count = $count+1;
                ?>   

                <tr>
                <td><?php echo $count?></td>
                <td><?php echo $row['Username'];?></td>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Type'];?></td>
                <td><?php echo $row['NoGuest'];?></td>
                <td><?php echo $row['Checkin'];?></td>
                <td><?php echo $row['Checkout'];?></td>
                <td><?php echo $row['PhoneNo'];?></td>
                <td><?php echo $row['City'];?></td>
                <td><?php echo $row['Total'];?></td>


                <td>

                <form action="status1.php" method="post">

                <input type='hidden' name='SNo' value='<?php echo $row['SNo'] ?>'/>

                <input class='btn' type='submit' name='Rfree' value='Delete'  /></form>
                </td>



                <!--       0-admin cancel ,1-admin accept , pending-processing ,cancel-cancel by user-->
                <?php
                }
                }      
                else 
                {
                ?>
                <tr><td colspan="11" style='color:red;'>No Rejected Rooms  </td></tr>
                <?php
                }
                ?>
                </table>


                </div>
<!--EXPIRED EVENT LIST-->
    <div id='E-expired'>

    <center> <h2>EXPIRED EVENTS </h2></center>
    <table class="fl-table" >
    <tr>
    <th>S No</th>
    <th>Username</th>
    <th>Name</th>
    <th>Type</th>
    <th>No Guest</th>
    <th>Date</th>
    <th>In Time</th>
    <th>Out Time</th>
    <th>Phone No</th>
    <th>City</th>
    <th>Total</th>
    <th>Action</th>
    </tr>
    <?php
    // session_start();
    $count=0;
    $con=mysqli_connect('localhost','root','','hotelmanagement');
    $query="select * from events WHERE Checkin < CURDATE() ";
    $num=mysqli_query($con,$query);
    if(mysqli_num_rows($num)>0)
    {
    while($row=mysqli_fetch_assoc($num))
    {
    $count = $count+1;
    ?>   

    <tr>
    <td><?php echo $count?></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['Name'];?></td>
    <td><?php echo $row['Type'];?></td>
    <td><?php echo $row['NoGuest'];?></td>
    <td><?php echo $row['Checkin'];?></td>
    <td><?php echo $row['InTime'];?></td>
    <td><?php echo $row['OutTime'];?></td>
    <td><?php echo $row['Phone'];?></td>
    <td><?php echo $row['City'];?></td>
        <td><?php echo $row['Total'];?></td>

    <td>

    <form action="status.php" method="post">

    <input type='hidden' name='SNo' value='<?php echo $row['SNo'] ?>'/>

    <input class='btn' type='submit' name='delete' value='Delete'  /></form>

    </td>

    <?php
    }
    }

    else 
    {
    ?>
    <tr><td colspan="12" style='color:red;'>No Events are booked </td></tr>
    <?php
    }
    ?>
    </table>


    </div>
                        <div  class="adduser"id='add'>   



                       <br> <center><h1 >ADD ROOMS</h1></center><br><br>


                        <form action='status1.php' method='POST'>
                        <label class='input-label'>Type of Room</label>
                        <select  class='input-field'  for ='type' name='Type'>

                        <option value='club'> club</option>
                        <option value='classic'> classic</option>
                        <option value='superior'> superior</option>
                        <option value='family'> family</option>
                        <option value='presidential'> presidential</option>
                        <option value='bachelor'> bachelor</option>
                        <option value='luxury'> luxury</option>
                        <option value='delux'> delux</option>
                        <option value='superdelux'> superdelux</option>
                        </select>
                        <label class='input-label'>No of Rooms</label>
                        <input type='phonenumber' name="NoRoom"  class='input-field' placeholder="Type number" required><br><br>

                        <button style="margin-left:80px;" type='submit' class='btn-acc' name="add">Add</button>
                        <button type='submit' class='btn'  name="delete">Remove</button>
                        </form>



                        </div>
            
       


    </body>
    <?php
    if (isset($_POST['delete']) || isset($_POST['delete']))
    {
    $id = $_POST['ID'];
    $query="DELETE FROM signup WHERE ID ='$id'";
    $data=mysqli_query($con,$query);

    if($data)
    {

    echo"<script>window.alert('RECORD IS DELETED FROM DATABASE')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/admin.php#user"/>
    <?php
    }
    else
    {
    echo"<script>window.alert('FAILED TO DELETED THE RECORD FROM DATABASE')</script>";	
    }
    }
    ?>

    </html>