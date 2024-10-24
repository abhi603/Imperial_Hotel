<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
        function get_data() {
			
			
			
            $datae = array();
            $datae[] = array(
                'name' => $_POST['name'],
				'email' => $_POST['email'],
            	'mobile' => $_POST['mobile']
		
				
				
				
            );
            return json_encode($datae);
        }
          
        $name = "signup";
        $file_name = $name . '.json';
       
        if(file_put_contents(
            "$file_name", get_data())) {
                echo $file_name .' file created';
				// include 'index.html';
				header('Location: login.php');
				
            }
        else {
            echo 'There is some error';
        }
    }
?>
