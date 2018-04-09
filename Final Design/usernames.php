
<?php
	$person = $_POST['person'];
	echo $person;
	
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "player_names";

	// Create connection
	$con=mysqli_connect(host,username,password,dbname); 

	// Check connection
	if (mysqli_connect_errno()){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	
	
?>
