<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
        function get_data() {
			
		
			
            $datae = array();
            $datae[] = array(
                'name' => $_POST['name'],
				'email' => $_POST['email'],
            	'message' => $_POST['message']
			
				
				
				
            );
            return json_encode($datae);
        }
          
        $name = "email";
        $file_name = $name . '.json';
       
        if(file_put_contents(
            "$file_name", get_data())) {
                echo $file_name .' Email messge sent through JSON';
				//include 'index.html';
				header('Location: email_msg.php');
				
            }
        else {
            echo 'There is some error';
        }
    }
?>
