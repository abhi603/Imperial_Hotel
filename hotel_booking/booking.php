<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
        function get_data() {
			
			$cost=900;
			if($_POST['rooms']=='luxurys')
			{
					$cost=2000*$_POST['no_rooms'];
			}
			if($_POST['rooms']=='deluxs')
			{
					$cost=1500*$_POST['no_rooms'];
			}
				if($_POST['rooms']=='premiers')
			{
					$cost=1200*$_POST['no_rooms'];
			}
				if($_POST['rooms']=='Luxuryr')
			{
					$cost=1000*$_POST['no_rooms'];
			}
				if($_POST['rooms']=='deluxr')
			{
					$cost=800*$_POST['no_rooms'];
			}
				if($_POST['rooms']=='premierr')
			{
					$cost=500*$_POST['no_rooms'];
			}
			
			
			$tax=$cost*10/100;
			$total_amount=$cost+$tax;
			
            $datae = array();
            $datae[] = array(
                'name' => $_POST['name'],
				'email' => $_POST['email'],
            	'no_rooms' => $_POST['no_rooms'],
				'guests' => $_POST['guests'],
				'date1' => $_POST['date1'],
				'rooms' => $_POST['rooms'],
				'cost' => $cost,
				'tax'=>$tax,
				'total_amount'=>$total_amount
				
				
				
            );
            return json_encode($datae);
        }
          
        $name = "booking";
        $file_name = $name . '.json';
       
        if(file_put_contents(
            "$file_name", get_data())) {
                echo $file_name .' file created';
				// include 'index.html';
				header('Location: payment.php');
				
            }
        else {
            echo 'There is some error';
        }
    }
?>
