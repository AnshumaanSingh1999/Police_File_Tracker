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
		$queryread2 = "SELECT history FROM files WHERE tokenno='$fltkn'"; 
		$resultread2 = mysqli_query($db_connection,$queryread2);
		$rows = mysqli_fetch_array($resultread2);
		if($rows){
			$hist=$rows['history'];
			$newhist="". $hist."<br>". $status. " by " . $udb." on " . $date.".";
			$msg = "File Details Updated Successfully.";
			$queryupdate = "UPDATE files SET status='$status',updatedby='$udb',history='$newhist' WHERE tokenno='$fltkn'"; 
			$resultupdate = mysqli_query($db_connection,$queryupdate);
		}
		else{
			$msg2 = "Renter Correct Token No!";
			}
				echo "<meta http-equiv='refresh' content='2'>";
}
?>