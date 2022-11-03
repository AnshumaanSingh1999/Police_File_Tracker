<?php
session_start();
error_reporting(0);
if(isset($_POST['updatesubmit']) )
{
$fltkn = $_POST['fltkn'];
$status = $_POST['status'];
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d");
$udb=$_SESSION["username"];


$db_connection = mysqli_connect("localhost", "root", "", "police_file_tracker");
		$fltkn = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $fltkn)));
		$password = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $status)));
        $date = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $date)));
		$udb = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $udb)));

/*		$query1 = "SELECT status,  FROM details WHERE username = '" . $username. "' AND password = '" . $password . "'"; */
	$queryupdate = "UPDATE files SET dateoforigin='$date',status='$status',updatedby='$udb' WHERE tokenno='$fltkn'"; 

$resultupdate = mysqli_query($db_connection,$queryupdate);
		if($resultupdate) {
			$msg = "File Details Updated Successfully.";
			} 
			else {
			$msg = "Renter Correct Token No!";
			}
				echo "<meta http-equiv='refresh' content='2'>";




}
?>