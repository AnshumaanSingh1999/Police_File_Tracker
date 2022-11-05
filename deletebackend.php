<?php
session_start();
error_reporting(0);
if(isset($_POST['submit']) )
{
$fltkn = $_POST['fltkn'];
$db_connection = mysqli_connect("localhost", "root", "", "police_file_tracker");
$fltkn = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $fltkn)));
$queryread3 = "SELECT * FROM files WHERE tokenno='$fltkn'"; 
$resultread3 = mysqli_query($db_connection,$queryread3);
$rows = mysqli_fetch_array($resultread3);
		if($rows){
			$msg = "File Details Deleted Successfully.";
            $querydelete = "DELETE FROM files WHERE tokenno='$fltkn'";
            $resultdelete = mysqli_query($db_connection,$querydelete);
		}
		else{
			$msg2 = "Renter Correct Token No!";
			}
echo "<meta http-equiv='refresh' content='2'>";
}
?>


