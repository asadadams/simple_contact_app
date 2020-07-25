<?php
	if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip'])){
		$contacts_file_name = 'contacts.txt';
		$counter_file_name = 'counter.txt';
		
		$myfile = fopen($contacts_file_name, 'a') or die('Cannot open file: '.$contacts_file_name); 
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		
		//Reading counter and updating counter
		$count = (int)file_get_contents($counter_file_name);
		$count+=1;
		file_put_contents($counter_file_name,$count);
		
		
		$data  = $count.",".$fname.",".$lname.",".$email.",".$phone.",".$address.",".$city.",".$state.",".$zip."\n";
		fwrite($myfile,$data);
		fclose($myfile);
		echo "Contact entry successfully added";
	}else{
		echo "All fields are required <a href='index.php'>Go Back</a>";
	}
?>