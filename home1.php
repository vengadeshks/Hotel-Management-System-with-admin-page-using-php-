<html>

    <head>
        <title>Pasific Hotel</title>
   <link rel="shortcut icon" type="image/x-icon" href="picture/hotel.png" /> 
        <link rel='stylesheet' href='style.css'> 
        <link  rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
                <style>

                .loader{
                position:fixed;
                z-index:99;
                top:0;
                left:0;
                width:100%;
                height:100%;
                background:white;
                display:flex;
                justify-content:center;
                align-items:center;
                }
                .loader > img{
                width:20%;
                }
                .loader.hidden{
                animation:fadeout 1s;
                animation-fill-mode:forwards;			
                }
                @keyframes fadeout{
                100%{
                opacity:0;
                visibility:hidden;
                }
                }
                #navbar {
                overflow: hidden;
                }

                .dropdown {
                float: left;
                margin-top: 0;
                overflow: hidden;
                }

                .dropdown .dropbtn {
                background-color: inherit;
                font-family: inherit;
                margin: 0;
                background:#2d545e;
                overflow:hidden;
                color: white;
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 0 20px 4px 20px;
                text-decoration: none ;
                font-size:18px;
                border:none;
                }
                .navbar a:hover, .dropdown:hover .dropbtn {
                background-color: #ddd;
                }

                .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
                z-index: 1;
                }

                .dropdown-content a {
                float: none;
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
                }

                .dropdown-content a:hover {
                background-color: #ddd;
                }

                .dropdown:hover .dropdown-content {
                display: block;
                }

                /*    button with span ,hover effect    */


                .home-button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
                }

                .home-button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
                }

                .home-button:hover span {
                padding-right: 25px;
                }

                .home-button:hover span:after {
                opacity: 1;
                right: 0;
                }


                </style>
    </head>

    <body>
        <div class="loader">
	  <img src="picture/loading.gif" alt="Loading...." />
	</div>
	<script>
	   window.addEventListener("load",function(){
		   const loader = document.querySelector(".loader");
		   console.log(loader);
		   loader.className += " hidden";
	   });
	</script>
        
        
      <?php
        session_start();
        $name = $_SESSION["username"];
        ?>

      <div id='navbar' class='home-body-nav'  >
        <a id="first" href="home.html" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a>
        <a href="aboutus.html">About</a>
        <a href="gallery.html">Gallery</a>
          <a href="service.html">Service</a>
        
         <div class="dropdown">
         <button class="dropbtn">Booking  <i class="fa fa-caret-down"></i></button>
         <div class="dropdown-content">
         <a href="room.php">Rooms</a>
         <a href="event.php">Conference hall</a>
         <a href="event.php">Events</a>
         </div>
         </div>
        <a href="appointment.php#room">Booking History</a>
        <a href="event.php">Meetings & Events</a>
        <a href="contact.html">Contact</a>
          
        <a style='float:right'id="logout" href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;logout</a>
        <p style=' float:right;
     color: #f2f2f2;
     text-align: center;
     margin-right: 20px;
     font-size:18px;'><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $name;?></p>
        
     </div>
    <img  id='slide' src='picture/A.jpg' alt='Immage Error' width=100% height='500'><br>
       <h1 style= "font-family: Arial, Helvetica, sans-serif; color:#2d545e;">   &nbsp;&nbsp;&nbsp; <i class="fa fa-building" aria-hidden="true"></i>&nbsp;The Pasific Hotel,luxury collections ,chennai.</h1><br>
         <div class='intro'> 
         <p>
             <B> Overview</B><br>This ornate, palatial tribute to Southern India's greatest empires -The pasific - overlooks verdant foliage in the heart of Chennai. This luxury hotel offers one of the largest banqueting facilities in India, 10 award winning F&B outlets, signature wellness experiences and more.<br>

 It embodies the highest standards in Indian hospitality balanced with elegant restraint in a prime property with distinct personality.<br><b>The passific has 522 rooms and 78 luxuriously appointed service apartments- collectively its 600 spacious guest rooms, suites and luxury service apartments,</b> are the epitome of Indian grace and style, expertly delegated with thoughtful amenities.The pasific meets the needs of both the business traveller on the move as well as the bespoke requirements of the destination connoisseur.</p>
             <p><B>Ideal Location</B><br>

The delights of this luxurious hotel are varied. As a fascinating throwback to a vibrant period in Indian history, The pasific stands for timeless beauty and luxury. Built in the midst of the business hub of Guindy and located on Mount Road,Pasific in Chennai is within close proximity to many key areas of Chennai and is just 8 km away from the domestic and international airport which serves as an ideal destination for both business and leisure sojourns. The well-connected roads and transportation system enable easy accessibility to commercial points and key areas in the city. </p>
<p><B>Refined Artistry</B><br>
Towering facades and flowing architecture are leaves taken from the aesthetics of the Cholas, an ancient dynasty that made a deep impact on many regions within and outside of this country. From the shores of the Bay of Bengal to that of South Asian borders of Malaysia, China and Sri Lanka among others, the Cholas have influenced art, architecture and culture from their time to now. Impeccably carved temples, bronze sculptures of unparalleled beauty and keen attention to detail are aesthetics that continue to influence us till now.
             </p>
             
     </div>
        
        <div class="black">
            
           <div class='home-book'> <label>City/Destination/Hotel<br>The Pasific Chennai</label></div>
            <div class='home-book'> <label>Check in</label><p id='date'></p></div>
             <div class='home-book'><label>Check out </label><p id='tom'>Select checkout date</p></div>
            <div class='home-book'><label>No of rooms available</label><p>Quick link</p></div>
            <div class='home-book'><button class='home-button'  onclick='btnlink()'><span>Check Rates</span></button></div>
        </div>
        
        <div class='hotel-image'>
        <div class='three'>
            <div class='hotel-image-detail'><img class='img' src='picture/accomadation.jpg' alt='Image Error'  width='350px' height='200px'>
                <center><h2>ACCOMMODATION</h2></center>
            <p>With 506 rooms, 78 luxuriously appointed service apartments & 16 palatial suites which are the epitome of Indian grace and style.</p>
            </div>
              <div class='hotel-image-detail'><img class='img' src='picture/well.jpg' alt='Image Error'  width='350px' height='200px'> 
            <center><h2>DINING</h2></center>
            <p>Ten distinct dining destinations featuring Indian & international cuisine along with some of the world’s most well appreciated and prized beverages.</p>
            </div>
              <div class='hotel-image-detail'><img class='img' src='picture/dining.jpg' alt='Image Error' width='350px' height='200px'>
            
            <center><h2>WELLNESS</h2></center>
            <p>Embodying our commitment to holistic wellbeing, ITC Grand Chola offers facilities that provide healthier options for a better stay.</p>
            </div>
            </div>
            <div class='three'>
              <div class='hotel-image-detail'><img class='img' src='picture/summing.jpg' alt='Image Error' width='350px' height='200px'>
                <center><h2>CITY GETAWAY</h2></center>
            <p>Discover exquisite weekend getaways in the comfort of your own city. Enjoy breakfast, Wi-Fi, happy hours, savings on dining & spa, and more.</p>
                </div>
              <div class='hotel-image-detail'><img class='img' src='picture/suits.jpg' alt='Image Error' width='350px' height='200px'>
                <center><h2>SHORT BREAK</h2></center>
            <p>Capture a lifetime of great memories. Includes Wi-Fi, Breakfast and more</p>
                </div>
              <div class='hotel-image-detail'><img class='img' src='picture/away.jpg' alt='Image Error' width='350px' height='200px'>
                <center><h2>SUITE SOJOURNS</h2></center>
            <p>Exceptional value for a superlative suite experience with airport transfers, Wi-Fi, breakfast and more.</p>
                </div>
            </div>
        </div>
        
        
        <div class='split'>
     <div class='split-left'>
        <img class='home-image'src='picture/facility.jpg' alt='image not found'>
        </div>
        <div class='split-right'>
            <h1 style= font-style: bold;>More facilities....</h1> 
            <ul class='list'>
                  <li>Spa</li>
                  <li>Car parking.</li>
                  <li>Semi open & outdoor restaurant.</li>
                  <li>Public computer.</li>
                  <li>24 Hourse security</li>
                <li>Poolside bar.</li>   </ul>
            <p >The PACIFIC INTERNATIONAL Hotel is not merely the building but, above all, its people. We are a team of professionals, who can organise every event end-to-end.</p>
<p>We have many years of experience, extensive conference facilities, as well as technical and catering equipment, and we will be more than happy to organise your meeting – both in our building, in a tent at the hotel's patio, as well as in any other place of your choosing.</p>       
        </div>
        </div>
                
        
<div class='last'>
        <div class='contact'>
        
    <h2><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;Contact</h2>
        <p style='font-size:20px'>The Pasific,<br>

No. 63, Mount Road, Guindy,<br>

Chennai- 600032<br>

Tamil Nadu, India<br><br>

 

Telephone Number: +9544 3220 0000<br>

Fax Number: +9144 2220 0300<br>

            Email Id: pasific@itc.in</p>
            
            </div>
     <div class = "vertical"></div> 
        
        <div class='dest'>
            <h2>DESTINATIONS</h2>
            <p style='font-size:20px'>New Delhi resort|Goa Hotel|Chennai Hotel|Bangaluru Hotel<br>
               Hyderabad Hotel|Kolkata Hotel|Jaipur Hotel|Agra Hotel<br>
               Mamallapuram Hotels |lucknow Hotels|Madurai Hotels
            </p>
        </div>
            </div>
        <div class='contact-box'>
        <form id='mail'   class="mail-form"  method='post' action='contact.php'>
            <center><h1>Contact us</h1></center>
            <p style='text-align: center; padding: 10px 30px;'>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
            <input type='text'  name='name' class='input-field' placeholder="Name" required><br>
              <input type='email' name='email' class='input-field' placeholder="Email" required><br>
              <input type='sub' name='sub' class='input-field' placeholder="Subject" required><br>
              <textarea name="message" class='input-field' placeholder='Message'></textarea><br><br>
             
              <button type='submit' class='class-btn'>Send</button>
        </form>
        
        </div>
        
        <hr style="height:1px;margin-left:0;background: black">
        <p>Terms|Privacy|SiteMap|FAQs|cookie statement<center>Powered By</center></p>
        
          <script>

              
            var x=['picture/A.jpg','picture/B.jpg','picture/C.jpg','picture/D.jpg','picture/E.jpg','picture/F.jpg','picture/G.jpg','picture/H.jpg','picture/I.jpg'];
              slide=document.getElementById('slide');
              count=0;
                function slideshow()
              {
                   count=count+1;
                          if(count<=x.length)
                              {
                                  if(count==x.length)
                                      {
                                           count=0;
                                      }
                                 
                               slide.src=x[count];

                              }
              }
                  setInterval(slideshow,2000);
              var d = new Date();
              var tommorow;
              document.getElementById("date").innerHTML =d.toDateString();
               tommorom.setDate(d.getDate()+1);
              document.getElementById("tom").innerHTML =d.toDateString();
              
              function btnlink()
              {
                  location.replace("room.php"); 

              }
             
              
</script>
        
        
        
    </body>


</html>