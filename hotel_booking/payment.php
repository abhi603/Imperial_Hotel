<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Imperial Hotel</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/pickmeup.min.js"></script>
    <script type="text/javascript" src="dist/handleCounter.js"></script>
    <link rel="stylesheet" type="text/css" href="css/pickmeup.css">
    <link rel="stylesheet" type="text/css" href="css/handle-counter.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script type="text/javascript" src="dist/jquery.scrollUp.js"></script>
     <script type="text/javascript" src="dist/demo.js"></script>

    <!-- INCLUDING JQUERY-->
    <script src=
"https://code.jquery.com/jquery-3.5.1.js">
    </script>
  
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 
                'Gill Sans MT', ' Calibri', 
                'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
			background-color: #E4F5D4;
        }
  
        td {
            font-weight: lighter;
        }
		
		button
		{
			font-weight: bold;
            border: 1px solid black;
       padding-top: 10px;
	   padding-bottom: 10px;
	   padding-left: 10px;
	   padding-right: 10px;
            text-align: center;
			background-color: green;
			color:white;
			
		}
    </style>
    
    </head>
    
<body>
    <header class="tm-header">
        <img class="tm-logo" src="images/logo.PNG" alt="Imperial Hotel">
        <nav class="tm-nav">
       <div>
            <ul>
                <li class="tm-list"><a href="index.html">Home</a></li>
                <li class="tm-list"><a href="explore.html">Explore</a></li>
                <li class="tm-list"><a href="rooms.html">Rooms</a></li>
                <li class="tm-list"><a href="login.php">Booking</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>    
            </div>
        </nav>
    </header>
    
	
   
    <section class="tm-main">
           <p><h1 style="color:white"> Booking Order Summary<h1></p>
    </section>
    <form method="post" action="payment_process.php">
	
	
	<div class="row">
	
	
     <section class="tm-booking">
	 

        <!-- TABLE CONSTRUCTION-->
        <table id='table'>
            <!-- HEADING FORMATION -->
            <tr>
              <td colspan="2">Booking Order Receipt</td>
       
            </tr>
  
            <script>
                $(document).ready(function () {
  
                    // FETCHING DATA FROM JSON FILE
                    $.getJSON("booking.json", 
                            function (data) {
                        var room_booking = '';
  
                        // ITERATING THROUGH OBJECTS
                        $.each(data, function (key, value) {
  
                            //CONSTRUCTION OF ROWS HAVING
                            // DATA FROM JSON OBJECT
                            room_booking += '<tr>';
							room_booking += '<td> NAME </td>' ;
                               room_booking += '<td>' + 
                                value.name + '</td>';
							room_booking += '</tr>';
  
							   room_booking += '<tr>';
							room_booking += '<td> EMAIL </td>' ;
                               room_booking += '<td>' + 
                                value.email + '</td>';
							room_booking += '</tr>';
							
							 room_booking += '<tr>';
							room_booking += '<td> Room Booking Date: </td>' ;
                               room_booking += '<td>' + 
                                value.date1 + '</td>';
							room_booking += '</tr>';
							
							  room_booking += '<tr>';
							room_booking += '<td> Number of Rooms </td>' ;
                               room_booking += '<td>' + 
                                value.no_rooms + '</td>';
							room_booking += '</tr>';
							
                           room_booking += '<tr>';
							room_booking += '<td> Number of Guests </td>' ;
                               room_booking += '<td>' + 
                                value.guests + '</td>';
							room_booking += '</tr>';
  
                              room_booking += '<tr>';
							room_booking += '<td> Room type </td>' ;
                               room_booking += '<td>' + 
                                value.rooms + '</td>';
							room_booking += '</tr>';
								
						     room_booking += '<tr>';
							room_booking += '<td> Total Cost(USD) </td>' ;
                               room_booking += '<td>' + 
                                value.cost + '</td>';
							room_booking += '</tr>';
  
							room_booking += '<tr>';
							room_booking += '<td> Tax(USD) </td>' ;
                               room_booking += '<td>' + 
                                value.tax + '</td>';
							room_booking += '</tr>';
							
							 room_booking += '<tr>';
							room_booking += '<td> Total Amount Payable(USD) </td>' ;
                               room_booking += '<td>' + 
                                value.total_amount + '</td>';
							room_booking += '</tr>';
                        
  
                           // room_booking += '</tr>';
						   
						   	 room_booking += '<tr>';
							room_booking += '<td colspan="2"><button type="submit" >Proceed Payment</button></td>' ;
                            
                                
							room_booking += '</tr>';
                        });
                          
                        //INSERTING ROWS INTO TABLE 
                        $('#table').append(room_booking);
                    });
                });
            </script>
			
   
    </section>
	</div>
	
    
    

 </form>
         
            
            

            
            

              
            
            
  
  
        

        

    
    




    
    </body>
    
</html>
    