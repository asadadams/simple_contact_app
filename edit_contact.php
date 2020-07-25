<?php
	$contacts_file_name = 'contacts.txt';
	//Reding file into an array
	$records = file($contacts_file_name);
	$line_no_to_fetch = $_GET['id']-1; //Subtracting 1 from id to get the line to fetch on file
	$row = explode(',', $records[$line_no_to_fetch]);
?>
<html>
	<head>
		<title>Edit contact</title>
	</head>
	<body>
		<h1>Edit Contact Entry</h1><br> 
		
		<form method="POST" action="update_contact.php?line=<?php echo $line_no_to_fetch;?>">
		  <label for="fname">First name:</label><br>
		  <input type="text" id="fname" name="fname" value="<?php echo $row[1];?>"><br>
		  
		  <label for="lname">Last name:</label><br>
		  <input type="text" id="lname" name="lname" value="<?php echo $row[2];?>"><br>
		  
		  <label for="lname">Email Address:</label><br>
		  <input type="email" id="email" name="email" value="<?php echo $row[3];?>"><br>
		  
		  <label for="lname">Phone Number:</label><br>
		  <input type="text" id="phone" name="phone" value="<?php echo $row[4];?>"><br>
		  
		  <label for="lname">Address:</label><br>
		  <input type="text" id="address" name="address" value="<?php echo $row[5];?>"><br>
		  
		  <label for="lname">City:</label><br>
		  <input type="text" id="city" name="city" value="<?php echo $row[6];?>"><br>
		  
		  <label for="lname">State:</label><br>
		  <input type="text" id="state" name="state" value="<?php echo $row[7];?>"><br>
		  
		  <label for="lname">Zip:</label><br>
		  <input type="text" id="zip" name="zip" value="<?php echo $row[8];?>"><br><br>
		
		
		  <input type="submit" value="Update Entry">
		</form>
	</body>
</html>