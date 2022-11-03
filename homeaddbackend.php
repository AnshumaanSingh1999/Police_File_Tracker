<?php
session_start();
error_reporting(0);

if(isset($_POST['submit']) )
{
$fn = $_POST['fn'];
$ft = $_POST['ft'];
$doo = $_POST['doo'];
$bnn = $_POST['bnn'];

$db_connection = mysqli_connect("localhost", "root", "", "police_file_tracker");
$fn = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $fn)));
$ft = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $ft)));
$doo = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $doo)));
$bnn = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $bnn)));

		$query = "INSERT INTO files (filename,filtetype,beneficiaryname,dateoforigin/*,status,updatedby*/) VALUES ('$fn','$ft','$bnn','$doo')";
		$result = mysqli_query($db_connection,$query);
		if($result) {
			$msg = "File Details Uploaded Successfully.";
			} 
			else {
			$msg = "Renter Username or Password!";
			}
				echo "<meta http-equiv='refresh' content='2'>";

		}


?>


