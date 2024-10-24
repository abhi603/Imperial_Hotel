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

    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3tO4SQlk9ZVpuhRXlmNfYh37e63-Li2k&callback=initMap">
    </script>

 
    
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
           <p>Sign Up</p>
    </section>
    
    
    
    <section class="tm-booking">
    
      <form method="post" action="signup_insert.php">
        <div class="tm-form1">
    <input type="text" name="name" id="name" placeholder="Name"> 
		
    <input type="email" name="email" id="email" placeholder="E-mail"> 
	<input type="text" name="mobile" id="mobile" placeholder="password" style="margin-left:25px;"> 

    
   
            <input type="submit" id="sub2" value="Submit">

    </div>
        </form> 
        
        <div class="vertical-line"> </div>
        
    <div class="tm-form2">

    </div>
        
  </section>
    
    
    <footer class="tm-footer">
        <div class="tm-us">
        <p class="bold">About Us</p>
        <p>We are a part of chain of luxury hotels 
            which extends all over the world. We 
            provide a luxorious stay with various value
            added and free services which will make
            you visit us over and over again.</p>    
        </div>
       
        <div class="tm-address">
        <p class="bold">Address</p>
        <p>Overladn park , KS, Phone:(+1)9131634567
            Email : Imperial@info.com</p>    
        </div>
        <br/>
    <div class="tm-media">
        <a href="#"> <img src="images/fb.png"></a>
        <a href="#"> <img src="images/G.png"> </a>
        <a href="#"> <img src="images/twittr.png"> </a>
        <a href="#">  <img src="images/insta.png"> </a>
        
        </div>
<!--        <a href="#">  <img class="tm-up" src="images/up.png"> </a>-->
    </footer>
    

    
    </body>
    
</html>
    