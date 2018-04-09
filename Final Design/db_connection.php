<?php

$user = 'root';
$pass = '';
$db = 'player_names';
$person = $_POST['person'];

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

echo "Great work";

$sql = "INSERT INTO `users`(`id`, `user_names`) VALUES ([value-1],$person)"

if(!mysql_query($db,$sql)) {
	echo "not inserted";
}

else {
	echo "lit fam";
}

header("refresh:2; url=index.html");
?>﻿