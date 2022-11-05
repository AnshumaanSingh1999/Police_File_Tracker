<?php
session_start();
error_reporting(0);

if(isset($_POST['submit']) )
{
$fn = $_POST['fn'];
$ft = $_POST['ft'];
date_default_timezone_set('Asia/Kolkata');
$doo = date("Y-m-d");
$bnn = $_POST['bnn'];
$udb=$_SESSION["username"];
$status="File Created";

$db_connection = mysqli_connect("localhost", "root", "", "police_file_tracker");
$fn = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $fn)));
$ft = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $ft)));
$doo = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $doo)));
$bnn = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $bnn)));
$udb = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $udb)));
$status = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $status)));
$history =  "". $status. " by " . $udb." on " . $doo."";
		$query = "INSERT INTO files (filename,filtetype,beneficiaryname,dateoforigin,status,updatedby,history) VALUES ('$fn','$ft','$bnn','$doo','$status','$udb','$history')";
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


