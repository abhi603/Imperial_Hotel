<html>
<script src=
"https://code.jquery.com/jquery-3.5.1.js">
    </script>
	

	 <script>
                $(document).ready(function () {
  
                    // FETCHING DATA FROM JSON FILE
                    $.getJSON("signup.json", 
                            function (data) {
                 
  
                        // ITERATING THROUGH OBJECTS
                        $.each(data, function (key, value) {
  
                     if(value.name==<?php $_POST['name'] ?> && value.email==<?php $_POST['email'] ?>)
					 {
						 <?php  header('Location: reservation.html');
				 ?>
					 }
  
						
							
						
                        });
                   
                    });
                });
            </script>
			</html>
	
	

