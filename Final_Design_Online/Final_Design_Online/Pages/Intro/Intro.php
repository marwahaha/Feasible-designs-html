<?php
$server = "ptvp.myd.infomaniak.com";
$user = 'ptvp_dmitriy';
$pass = 'nations2018';
$db = "ptvp_player_names";
$person = $_POST['txt'];
$conn = mysqli_connect($server, $user, $pass, $db);
$sql = "INSERT INTO `users` (`user_names`) VALUES ('$person')";
header("Access-Control-Allow-Origin: *");
// Reset auto increment ALTER TABLE `users` AUTO_INCREMENT=1;
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (mysqli_query($conn, $sql)) {
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

<!doctype html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../../CSS/intro.css" > 
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<title>Bob Ross and the hunt for the perfect mountain</title>
</head>
<body>
	<header style="color:balack;"> <h1>Bob Ross and the hunt for the perfect mountain</h1> </header>
	<div class="container">
		<nav>
			<ul class="nav nav-pills nav-fill">
			  <li class="nav-item">
				<a class="nav-link active"  href="../../index.html">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link active" id="play_nav" onclick="location.href='Intro.html';">Play</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link active" href="../Help/Help.html">F.A.Q/Help</a>
			  </li>
			</ul>
			
		</nav>
		<div class="content">
			<img src="../../Images/intro_img.png" id="intro_img" alt="clorox chan" width=450px height=550px>
			<p>To find your perfect mountain to paint, 
			<br> you will need to click the button that says:
			<br> <strong>Find your perfect mountain</strong></p>
			<br>
			<input type="button" onclick="location.href='../Find_your_mnt/Find_your_mnt.html';" value="Find your perfect mountain">
		</div>
</body>
</html>
