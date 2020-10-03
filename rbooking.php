<!DOCTYPE html>
<html>
<head>
	<title>Room Booking-form</title>
    <link rel="shortcut icon" type="image/x-icon" href="picture/hotel.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href="style1.css">
    <style>
        
        
        body{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            font-size:30px;
            color: black;    
            background-image:url('picture/bg.jpg');
              background-repeat:no-repeat;
                background-size:cover;
            
        }
        .box{
            width:550px;
            height:1700px;
            position:relative;
            position: absolute;   
            top:3%;
            left:55%;
           box-sizing: border-box;
            margin:6% auto;
            background: white;
/*            backdrop-filter:blur(5px) ;*/
            opacity:0.95;
            box-shadow: 0 0 10px black;
            padding: 1px;
            border-radius:20px;
            overflow: hidden;
        }
        
        
        .sign-up {
            width:100%;
            height:100%;
            position:absolute;
            background-size:cover;
            background-position:centre;
         
        }
        .btn{
            
            padding:15px 18px;
            width:40%;
            margin:30px auto;
            display:block;
            outline:none;
            border:0;
            background-color:lightblue;
            font-size: 18px;
            border-radius: 30px;
            cursor: pointer;
            border: 1px solid black;
            box-shadow: 0 0 3px black;
            
            
        }
        
        .input-field{
            font-size: 18px;
            padding:10px 10px;
            margin:25px 20px;
            width :70%;
            background: lightgray;
            outline:none;
            border-radius: 10px;
        }
        .input-label{
            font-size:22px;
            padding:40px 10px;
            margin:10px 15px;
            width :40%;
            
            
        }
       
        .booking{
             border-bottom-style: dashed;
            border-bottom-width: 0.5px;
            margin:10px 30px;
        }
        .container{
            
            display:flex;
            font-size:18px;
            margin-left:50px;
        
        }
        .sub-container{
            padding:20px 20px;
        }
        h3{
            width: 100%;
            height: 50px;
            padding : 20px 0px;
            background-color:lightblue;
/*            border-radius:20px;*/
            margin-top: 0;
            margin-bottom: 30px;
            border: 1px solid black;
             box-shadow: 0 0 7px black;
        }
        
    </style>
    </head>
    <body>
        <div id='navbar' class='home-body-nav'  style='background-color:lightblue; '>
     <a id="logout" href="javascript:goBack()" style=' color: black;' ><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;Back</a>
     
<script>
function goBack() {
  window.history.back();
}
</script>

     </div>
        <div class='sign-up'>
            
        <div class='box'>
              <center><h3 >ROOM-DETAILS</h3></center>
                <form  class="sign-form"  method='post' action='roombooking.php'>
                    
                        <div  class="booking">
                           <label class='input-label'>Type of Room</label>
                        
                       <?php 
                           if (isset ($_POST['club']))
                           {?>
                                   <input  class='input-field' type="text" value='club'  name="Type" readonly><br>
                        <?php   }
                            else if(isset ($_POST['classic']))
                                {?>
                                   <input  class='input-field' type="text" value='classic' name="Type"  readonly><br>
                        <?php   }
                            else if(isset ($_POST['superior'])){?>
                                   <input  class='input-field' type="text" value='superior'  name="Type"  readonly><br>
                        <?php   }
                            else if(isset ($_POST['family'])){?>
                                   <input  class='input-field' type="text" value='family'  name="Type"  readonly><br>
                        <?php   }
                            else if(isset ($_POST['presidential'])){?>
                                   <input  class='input-field' type="text" value='presidential'  name="Type" readonly><br>
                        <?php   }
                            else if(isset ($_POST['bachelor'])){?>
                                   <input  class='input-field' type="text" value='bachelor'  name="Type" readonly><br>
                        <?php   }
                            else if(isset ($_POST['luxury'])){?>
                                   <input  class='input-field' type="text" value='luxury'  name="Type" readonly><br>
                        <?php   }
                            else if(isset ($_POST['del']))
                                {?>
                                   <input  class='input-field' type="text" value='delux'  name="Type"  readonly><br>
                        <?php   }
                            else if(isset ($_POST['super'])){?>
                                   <input  class='input-field' type="text" value='superdelux' name="Type" readonly><br>
                        <?php   } else { echo 'no'; } ?>
                          
                           
                         <label class='input-label'>No of guest</label>
                        
                            <select  class='input-field'  for ='noguest' name='NoGuest'>
                            
                            <option value='1'> 1</option>
                            <option value='2'> 2</option>
                            <option value='3'> 3</option>
                            <option value='4'> 4</option>
                            </select>
                            <label  class='input-label'>Amount per day</label>
                         
                       <?php 
                           if (isset ($_POST['club']))
                           {?>
                                   <input id ='amt' class='input-field' type="text" value='7600' readonly><br>
                        <?php   }
                            else if(isset ($_POST['classic']))
                                {?>
                                   <input   id ='amt'  class='input-field' type="text" value='4500'  readonly><br>
                        <?php   }
                            else if(isset ($_POST['superior'])){?>
                                   <input   id ='amt'  class='input-field' type="text" value='5000'    readonly><br>
                        <?php   }
                            else if(isset ($_POST['family'])){?>
                                   <input   id ='amt'  class='input-field' type="text" value='7800'   readonly><br>
                        <?php   }
                            else if(isset ($_POST['presidential'])){?>
                                   <input   id ='amt'  class='input-field' type="text" value='6500'  readonly><br>
                        <?php   }
                            else if(isset ($_POST['bachelor'])){?>
                                   <input   id ='amt'  class='input-field' type="text" value='4000'  readonly><br>
                        <?php   }
                            else if(isset ($_POST['luxury'])){?>
                                   <input   id ='amt'  class='input-field' type="text" value='9500' readonly><br>
                        <?php   }
                            else if(isset ($_POST['del']))
                                {?>
                                   <input  id ='amt'   class='input-field' type="text" value='5500' readonly><br>
                        <?php   }
                            else if(isset ($_POST['super'])){?>
                                   <input  id ='amt'   class='input-field' type="text" value='6500' readonly><br>
                        <?php   } else { echo 'no'; } ?>
                          
                        <label class='input-label' for="checkin" >Check-in</label>
                        <input class='input-field' type="date" id="checkin" name="Checkin" onchange="CompareDate(event);" required><br>
                        <label class='input-label' for="checkout">Check-out</label>
                        <input type="date" id="checkout" class='input-field'  name="Checkout" onchange="handler(event);" required /><br>
                      
<!--                            <input type="date" id="dt" />-->
                        <label class='input-label'>Facilities</label><br>
                        <div class='container'>
                            <div class='sub-container'>
                            <input  type="checkbox" name="wifi" value="wifi" checked>
                            <label > Wifi Connectivity</label><br>
                                <input  type="checkbox" name="video" value="video">
                            <label > Video conferencing services</label><br>
                                <input  type="checkbox" name="pro" value="pro">
                            <label  > Projector</label><br><br>
                                </div>
                            <div  class='sub-container'>
                                 <input  type="checkbox" name="fax" value="fax">
                                <label>  Fax services</label><br>
                                <input  type="checkbox">
                            <label>  Welcome Desk </label><br>
                                <input  type="checkbox" >
                            <label> Audio / Video equipment</label><br><br>
                            
                            </div>
                        </div>        
                            <label class='input-label'>Total-Amount</label>
                            <input id='tot' class='input-field' type="text"  name="Total" readonly><br>
                            
                            <br><br>
                        </div>
                        <div class="personal">
                        <center><h3>Contact-Details</h3></center>
                        <input type='text' name='Name' class='input-field' placeholder="Name" required>
                        <input type='phonenumber'name="Phoneno" id='pwd' class='input-field' placeholder="Phone no" required>
                        <input type='text' name='City' class='input-field' placeholder="City" required>  
                        </div>
                        <button type='submit' class='btn'onclick="return confirm('Are you sure ,do you want to book this Room?')" >Book</button>        
            </form>


            </div>

            </div>
<script>
            var amt =document.getElementById('amt').value;


            function handler(e){
                var dateformat = e.target.value.split('-');
                var checkin =document.getElementById('checkin').value;
                var dateformat1 = checkin.split('-');
                var  cout=dateformat[2];
                var  coutmonth=dateformat[1];
                var  coutyear=dateformat[0];
                var cin=dateformat1[2];
                var cinmonth=dateformat1[1];
                var cinyear=dateformat1[0];
                var display = document.getElementById('tot');
                var days =cout-cin;
                var months =coutmonth-cinmonth;

                if (days==0){
                days=1;
                }

                if (cinyear==coutyear && cinmonth==coutmonth){
                if (days>=1){
                display.value= days*amt; 
                }
                else{
                alert("Please select valid checkout date from today");
                e.target.value ='';
                } 

                }
                else{
                alert("Please select checkout date with in this month and year");
                e.target.value ='';

                }

            }         
            function CompareDate(e) {    
                today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth()+1; //As January is 0.
                var yy = today.getFullYear();
                var dateformat = e.target.value.split('-');
                var  cin=dateformat[2];
                var  cinmonth=dateformat[1];
                var  cinyear=dateformat[0];

                if (yy==cinyear && mm==cinmonth && dd<=cin) { 
                   
                return true;

                }
                else if   (mm<cinmonth ){
                    return true;
                }
                 else if   (yy<cinyear){
                    return true;
                }
                
                else {    
                alert("Please select valid checkin date from today");
                e.target.value ='';
                }    
                }

        </script>
        
    
    </body>
</html>