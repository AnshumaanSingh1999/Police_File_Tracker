<?php
session_start();
error_reporting(0);
include_once("updatebackend.php");
?>
<html>
<head>
<title>Police File Tracker</title>
<link rel = "icon" href="up_police_icon.ico" type = "image/x-icon"> 
<script src="linksfunctionality.js"></script>
<link rel="stylesheet" href="updatestyle.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<?php
if($_SESSION["username"]) {
?>
<div class="container">

<h4>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?>.  <button id="logout" onclick="myFunction2()" type="button">Logout</button> <button id="home" onclick="myFunction5()" type="button">Home</button> <button id="delete" onclick="myFunction4()" type="button">Delete</button>   </h4>
<hr>
<h1>Update File Details:</h1>

<div class="container">
  
 
  
  <br>
<form method="post" autocomplete="off">
  <div class="row">
  <div class="col-sm-3 item"><b>File Token No</b></div>
  <div class="col-sm-2 item"><b>Status</b></div>
  
  
</div>
<br>

<div class="row">
  <div class="col-sm-3 item"><input type="number" name="fltkn" class="form-control" required></div>
  <div class="col-sm-2 item">
  <select name="status" id="status" required>
  <option value="" selected>Select Options</option>
  <option value="Action Started">Action Started</option>
  <option value="Action Completed">Action Completed</option>
  <option value="File Closed">File Closed</option>
</select>
</div>

  <div class="col-sm-2 item"><input type="submit" name="updatesubmit" class="btn btn-secondary" value="Update Details"></div>

</div>
<br>

</form>
<hr>

<?php
    

    
            if(isset($msg)){    ?>  

            
            <div class="alert alert-success centre">
      <?php
    
        echo $msg;
        
    
    ?>
  </div> 
  <br>   
         <?php } ?>


         <?php
    

    
    if(isset($msg2)){    ?>  

    
    <div class="alert alert-danger centre">
<?php

echo $msg2;


?>
</div> 
<br>   
 <?php } ?>
 
</div>

<?php
}else header("Location:index.php");
?>
</body>
</html>