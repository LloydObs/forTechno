<!--   DASIGAN, OBJERO, PINEDA, SUZUKI
       BSIT 3-2           
	   PASAHEROES, MAIN PAGE   -->

       <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
       <html xmlns="http://www.w3.org/1999/xhtml">
       <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>Main page</title>
       <link rel="stylesheet" href="output.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       </head>
       
       <body>
           <div class="top">
               <img src="logowhite.png" alt="Logo">
               <h1> <a href="main page signed in.html">PASAHEROES</a></h1>
               <h2>YOUR DREAM TRAVEL STARTS HERE</h2>

               <button class="button-2"> <a href="setting-logout.html">ACCOUNT</a></button>
      
           </div>
           
           <div class="below_top">
               <button class="button-3"> <a href="about.html">ABOUT</a></button>
               <button class="button-4"> <a href="destinations.html">OUR DESTINATIONS</a></button>
               <button class="button-5"> <a href="schedule.html">BUS SCHEDULES</a></button>
               <button class="button-6"> <a href="reviews.html">REVIEWS</a></button>
               <button class="button-7"> <a href="contact.html">CONTACT</a></button>
           </div>
           
           <div class="inputs">
               <form action="test1.php" method="post">		
        <?php
            require "DBconnection.php";
            session_start();
            ob_start();
            
            $passengerSerialNo = $_SESSION["serialNo"];
            $passengerPassword = $_SESSION["passengerPassword"];
            $query = "SELECT origin, destination, bookingDate, passengercount, amount, fare, passengerChange from bookinginfo 
                      where serialNo ='$passengerSerialNo' 
                      GROUP BY bookingDate DESC
                      LIMIT 1";
            $result = $connectDb-> query($query);

            if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                     $passengerOrigin = $row['origin'];
                     $passengerDestination = $row['destination'];
                     $passengerBookingDate = $row['bookingDate'];
                     $passengerCount = $row['passengercount'];
                     $passengerAmount = $row['amount'];
                     $busFare = $row['fare'];
					 $change = $row['passengerChange'];
            
                   
                                echo '<br><label  class="origin"> ORIGIN</label><br/>';
                                echo "<input id='origin' value=' $passengerOrigin' readonly>";
                   
                   
                                echo '<br><label  class="destination">DESTINATION</label><br/>';	
                                echo"<input id= 'destination' value=' $passengerDestination'readonly>";
            

                                echo '<br><label id = "departureDate"class="date">DEPARTURE DATE</label><br/>';
                                echo "<input id = 'departureDate' value=' $passengerBookingDate' disabled>";
                    
                   
                                echo '<br><label  class="count">PASSENGER COUNT</label><br/>';
                                echo "<input id='count' value=' $passengerCount'readonly/>";
                   
                   
                                echo '<br><label  class="fare">FARE</label><br/>';
                                echo "<input id='fare' value = ' $busFare.00 PHP' readonly>";
                   
                                echo '<br><label class="amount">MONEY AMOUNT</label><br/>';
                                echo "<input id='amount' value='$passengerAmount.00 PHP' readonly>";

                                echo '<br><label class="change">CHANGE</label><br/>';
                                echo "<input id = 'change' value='$change.00 PHP' readonly>";

                }
            }
       ?>
                   <div class="input_buttons">
					   <button type="reset"> <a href="main-page-signed-in.html">BACK</a></button>
                       <button type="submit">CONFIRM</button>
                   </div>
               </form>
               
           </div>


       </body>
       </html>
       