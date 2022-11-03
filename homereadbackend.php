<?php
session_start();
error_reporting(0);
$db_connection = mysqli_connect("localhost", "root", "", "police_file_tracker");
		$username = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $uname)));
		$password = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $pass)));
		$query = "SELECT * FROM files"; 
$result = mysqli_query($db_connection,$query);
?>