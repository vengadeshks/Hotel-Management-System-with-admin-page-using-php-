<html>
    <head><title>Room Selection Page</title>
    <link rel="shortcut icon" type="image/x-icon" href="picture/hotel.png" />
    <link rel="stylesheet" type="text/css" href="style1.css" />
     <link  rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <style>
            .readmore {
    
     
           text-align: center;
            color: white;
            background-color:dodgerblue ;
            padding :10px 10px;
            text-decoration: none;
                border: none;
           width:100px;
            margin-left: 115px;
                outline: none;
}

         .hotel-image{
                padding:12px;
                margin:1px;
                }
                .hotel-image-detail{
                width:350px;
                height:500px;
                margin:30px 45px;              
                box-shadow: 3px 3px 5px 6px #ccc;
                transition: 0.2s;

                }
            .hotel-image-detail:hover{
               transform: scale(1.09);
            
            }
                .three
                {
                display: flex;
                margin:10px 0px;
                
                }
            a{
                text-decoration: none;
                color:black;
                
            }

        .black-container{
            background-color: black;
            display: flex;
           
            padding:10px 10px;
            
        }
        
        .in{
             padding:40px 70px;
            
        }
        .black-container a{
            text-decoration: none;
             color:gainsboro;
        }
            .des {
                font-style: italic;
                font-size:20px;
                color:dodgerblue;
                text-align: center;
                text-decoration: none;
                justify-content: center;
                padding:0 20px;
            }
        </style>
    </head>
    <body>

        <?php
        session_start();
        $name = $_SESSION["username"]; 
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'hotelmanagement');
$type = array( 'club','classic','superior','family','presidential','bachelor','luxury','delux','superdelux');

for ($x = 0; $x < sizeof($type) ; $x++) {
 

$sel="select * from $type[$x]";
   
     $num =mysqli_query($con,$sel);

    $count[$x] =0;
    $total[$x] =0;
  while($row=mysqli_fetch_assoc($num))
{
         $total[$x]=$total[$x]+1;
      if ($row['Availability']==1)
      { 
          $count[$x]=$count[$x]+1;
      }
  }
    
    

    
}

?>
     
        

      <div id='navbar' class='home-body-nav'  >
     <a id="logout" href="home1.php" ><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;Back</a>
          <a id="logout" href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;logout</a>
       
        
        <p style=' float:right;
     color: #f2f2f2;
     text-align: center;
     margin-right: 20px;
     font-size:18px;'><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $name;?></p>
        
     </div>
        <p class='des' style="color:#2d545e">ROOM CATEGORY</p>
        
         <p class="des" style="color:#2d545e">THE PLACE, OUR SERVICES & OUR TEAM</p>
<div class='hotel-image'>
   
    
    
    <div class='three'>
    <div class='hotel-image-detail'><img class='img' src='picture/club.jpg' alt='Image Error'  width='350px' height='200px'>  
    <form method='POST' action="rbooking.php" >
    <center><h2>CLUB ROOM</h2></center>
    <p class="des">Facilities: Closet with hangers, 24 Hour room service,Computer and Internet access</p>
    <p class="des">Available:<?php  echo $count[0]; ?>/<?php  echo $total[0]; ?></p>
    <p class="des"><span  style='font-size: 30px; '> 7600 rs /</span>  per night</p>
     <input class="readmore" type='submit' name='club' value='BOOK NOW'/>
        </form>
  
    </div>
    <div class='hotel-image-detail'><img class='img' src='picture/classic.jpg' alt='Image Error'  width='350px' height='200px'>
    <form method='POST' action="rbooking.php" >
    <center><h2>CLASSIC ROOM</h2></center>
    <p class="des">Facilities: Closet with hangers, HD flat-screen TV, Telephone</p>
    <p class="des">Available:<?php  echo $count[1]; ?>/<?php  echo $total[1]; ?></p>
        <p class="des"><span  style='font-size: 30px; '> 4500 rs /</span>  per night</p>
          <input class="readmore" type='submit' name='classic' value='BOOK NOW'/>
        </form>
    </div>
    <div class='hotel-image-detail'><img class='img' src='picture/superior.jpg' alt='Image Error' width='350px' height='200px'>
     <form method='POST' action="rbooking.php" >
    <center><h2>SUPERIOR ROOM</h2></center>
    <p class="des">Facilities:  Computer and Internet access,HD flat-screen TV, Telephone</p>
    <p class="des">Available:<?php  echo $count[2]; ?>/<?php  echo $total[2]; ?></p>
        <p class="des"><span  style='font-size: 30px; '> 5000 rs /</span>  per night</p>
          <input class="readmore" type='submit' name='superior' value='BOOK NOW'/>
        </form>
    </div>
    </div>
    <div class='three'>
    <div class='hotel-image-detail'><img class='img' src='picture/family.jpg' alt='Image Error' width='350px' height='200px'>
         <form method='POST' action="rbooking.php" >
    <center><h2>FAMILY ROOM</h2></center>
   <p class="des">Facilities:32 Inch flat screen TV, Kitchen facilities,Towels,Dining tables</p>
   <p class="des">Available:<?php  echo $count[3]; ?>/<?php  echo $total[3]; ?></p>
        <p class="des"><span  style='font-size: 30px; '> 7800 rs /</span>  per night</p>
          <input class="readmore" type='submit' name='family' value='BOOK NOW'/>
        </form>
    </div>
    <div class='hotel-image-detail'><img class='img' src='picture/presidential.jpg' alt='Image Error' width='350px' height='200px'>
         <form method='POST' action="rbooking.php" >
    <center><h2>PRESIDENTIAL SUITES</h2></center>
    <p class="des">Facilities: Closet with hangers, HD flat-screen TV, Telephone</p>
    <p class="des">Available:<?php  echo $count[4]; ?>/<?php  echo $total[4]; ?></p>
        <p class="des"><span  style='font-size: 30px; '> 6500 rs /</span>  per night</p>
         <input class="readmore" type='submit' name='presidential' value='BOOK NOW'/>
        </form>
    </div>
    <div class='hotel-image-detail'><img class='img' src='picture/bachelor.jpg' alt='Image Error' width='350px' height='200px'>
         <form method='POST' action="rbooking.php" >
    <center><h2>BACHELOR ROOM</h2></center>
   <p class="des">Facilities: Soap & bath amenities,Mini-bar, Telephone</p>
   <p class="des">Available:<?php  echo $count[5]; ?>/<?php  echo $total[5]; ?></p>
        <p class="des"><span  style='font-size: 30px; '> 4000 rs /</span>  per night</p>
         <input class="readmore" type='submit' name='bachelor' value='BOOK NOW'/>
        </form>
    </div>
            </div>
    <div class='three'>
    <div class='hotel-image-detail'><img class='img' src='picture/luxury.jpg' alt='Image Error' width='350px' height='200px'>
         <form method='POST' action="rbooking.php" >
    <center><h2>LUXURY ROOM</h2></center>
   <p class="des">Facilities: Closet with hangers,32 Inch flat screen TV,Mini-bar, Telephone</p>
   <p class="des">Available:<?php  echo $count[6]; ?>/<?php  echo $total[6]; ?></p>
        <p class="des"><span  style='font-size: 30px; '> 9500 rs /</span>  per night</p>
          <input class="readmore" type='submit' name='luxury' value='BOOK NOW'/>
        </form>
    </div>
    <div class='hotel-image-detail'><img class='img' src='picture/dulex.jpg' alt='Image Error' width='350px' height='200px'>
         <form method='POST' action="rbooking.php" >
    <center><h2>DELUXE ROOM</h2></center>
    <p class="des">Facilities: Closet with hangers, HD flat-screen TV, Telephone</p>
    <p class="des">Available:<?php  echo $count[7]; ?>/<?php  echo $total[7]; ?></p>
        <p class="des"><span  style='font-size: 30px; '> 5500 rs /</span>  per night</p>
             <input class="readmore" type='submit' name='del' value='BOOK NOW'/>
        </form>
    </div>
    <div class='hotel-image-detail'><img class='img' src='picture/super.jpg' alt='Image Error' width='350px' height='200px'>
         <form method='POST' action="rbooking.php" >
    <center><h2>SUPERDELUXE ROOM</h2></center>
   <p class="des">Facilities:32 Inch flat screen TV, HD flat-screen TV,Mini-bar, Telephone</p>
    <p class="des">Available:<?php  echo $count[8]; ?>/<?php  echo $total[8]; ?></p>
        <p class="des"><span  style='font-size: 30px; '> 6500 rs /</span>  per night</p>
          <input class="readmore" type='submit' name='super' value='BOOK NOW'/>
        </form>
    </div>
            </div>
        </div>
    </body>
    </html>