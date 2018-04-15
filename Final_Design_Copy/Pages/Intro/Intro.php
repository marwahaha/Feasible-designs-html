
<?php
$_SERVER['REQUEST_METHOD'] === 'POST';
$server = "ptvp.myd.infomaniak.com";
$user = 'ptvp_dmitriy';
$pass = 'nations2018';
$db = "ptvp_player_names";
$person = $_POST['txt'];
$conn = mysqli_connect($server, $user, $pass, $db);
$sql = "INSERT INTO `users` (`user_names`) VALUES ('$person')";


error_log("txt== ".$person);

// Reset auto increment ALTER TABLE `users` AUTO_INCREMENT=1;

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";

	  echo error_log("txt== ".$person);

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

