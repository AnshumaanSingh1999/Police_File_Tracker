<?php
session_start();
error_reporting(0);
$db_connection = mysqli_connect("localhost", "root", "", "police_file_tracker");
$queryread = "SELECT * FROM files"; 
$resultread = mysqli_query($db_connection,$queryread);
?>