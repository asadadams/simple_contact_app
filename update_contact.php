<?php
	if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip'])){
		$contacts_file_name = 'contacts.txt';
		//Reding file into an array
		$records = file($contacts_file_name);
		$row = explode(',', $records[$_GET['line']]); //Putting existing data into an array to get the id
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		
		$result = '';
		foreach($records as $line) {
			if(substr($line, 0, 1) == $row[0]) {
				$result  .= $row[0].",".$fname.",".$lname.",".$email.",".$phone.",".$address.",".$city.",".$state.",".$zip."\n";
			} else{
				$result .= $line;
			}
		}
			
		file_put_contents($contacts_file_name, $result);
		
		echo "Contact successfully updated <a href='contacts.php'>Go Back</a>";
	}else{
		echo "All fields are required <a href='index.php'>Go Back</a>";
	}
?>