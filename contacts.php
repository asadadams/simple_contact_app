<?php
	//Getting records from the file
	$contacts_file_name = 'contacts.txt';
	//Reding file into an array
	$records = file($contacts_file_name);
?>
<html>
	<head>
		<title>Contacts</title>
	</head>
	<body>
		<h1>Contacts</h1><br> 
		
		<h2><a href='index.php'>Add contact</a></h2>
		<?php 
			if(!empty($records)):
		?>
		<table style="width:100%" border='1'>
		  <tr>
			<th>First name</th>
			<th>Last name</th>
			<th></th>
		  </tr>
		  <?php
				$id = 0; //For counting the number of iterations
				//Looping through all the records(lines)
				foreach($records as $line):
					$id++;
					//Seperating individual data which is seperated by a comma into an array $row
					$row = explode(',', $line);
		  ?>
		  
		    <tr>
				<td><?php echo $row[1];?></td>
				<td><?php echo $row[2];?></td>
				<td><a href='edit_contact.php?id=<?php echo $id;?>' >Edit Contact</a></td>
			</tr>
		  
		  <?php endforeach;?>
		</table>
		<?php else:?>
			<div>No contacts added yet</div>
		<?php endif;?>
		
	</body>
</html>