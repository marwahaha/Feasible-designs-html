<?php
$server = "ptvp.myd.infomaniak.com";
$user = 'ptvp_dmitriy';
$pass = 'nations2018';
$db = "ptvp_player_names";
$person = $_POST['txt'];
$conn = mysqli_connect($server, $user, $pass, $db);
$sql = "INSERT INTO `users` (`user_names`) VALUES ('$person')";

//error_log("txt== ".$person);
// Reset auto increment ALTER TABLE `users` AUTO_INCREMENT=1;

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!doctype html>
<html>
<head>
	<title> Example</title>
</head>
<body>
<ol>
   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
   <li>Aliquam tincidunt mauris eu risus.</li>
   <li>Vestibulum auctor dapibus neque.</li>
</ol>

<p>
This page is empty, here would go one of my scenarios
</p>
</body>
</html>