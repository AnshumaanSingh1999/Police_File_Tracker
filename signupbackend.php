<?php
error_reporting(0);
$uname = $_POST['uname'];
$pass = $_POST['pass'];
if($uname && $pass){
    $db_connection = mysqli_connect("localhost", "root", "", "police_file_tracker");
		$username = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $uname)));
		$password = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $pass)));
		$query = "INSERT INTO details (username,password) VALUES ('$username','$password')";
$result = mysqli_query($db_connection,$query);
if($result) {
$msg = "ID Created Successfully.";
} 
else {
$msg = "Renter Username or Password!";
}
    echo "<meta http-equiv='refresh' content='2'>";
}
?>