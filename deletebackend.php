<?php
session_start();
error_reporting(0);

if(isset($_POST['submit']) )
{
$fltkn = $_POST['fltkn'];
$msg="";
$db_connection = mysqli_connect("localhost", "root", "", "police_file_tracker");
$fltkn = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $fltkn)));
$querydelete = "DELETE FROM files WHERE tokenno='$fltkn'";
$resultdelete = mysqli_query($db_connection,$querydelete);
if($resultdelete === TRUE) {
    $msg = "File Details Deleted Successfully.";
} 
else{
    $msg = "Renter Correct Token Number!";
}
echo "<meta http-equiv='refresh' content='2'>";

}


?>


