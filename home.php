<?php
session_start();
error_reporting(0);
include_once("homeaddbackend.php");
include_once("homereadbackend.php");
?>
<html>
<head>
<title>Police File Tracker</title>
<link rel = "icon" href="up_police_icon.ico" type = "image/x-icon"> 
<script src="linksfunctionality.js"></script>
<link rel="stylesheet" href="homestyle.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="linksfunctionality.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
table, th, td {
  border:2px solid black;
}
</style>
</head>
<body>
<?php
if($_SESSION["username"]) {
?>
<div class="container">

<h4>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?>.  <button id="logout" onclick="myFunction2()" type="button">Logout</button> <button id="update" onclick="myFunction3()" type="button">Update</button> <button id="delete" onclick="myFunction4()" type="button">Delete</button>   </h4>
<hr>
<h1>Upload File Details:</h1>

<div class="container">
  
 
  
  <br>
<form method="post" autocomplete="off">
  <div class="row">
  <div class="col-sm-3 item"><b>File Title</b></div>
  <div class="col-sm-2 item"><b>File Type</b></div>
  <div class="col-sm-3 item"><b>Beneficiary Name</b></div>
</div>
<br>

<div class="row">
  <div class="col-sm-3 item"><input type="text" name="fn" value = "<?php if (array_key_exists('fn', $_POST)) {echo $_POST['fn'];}?>" class="form-control" required></div>
  <div class="col-sm-2 item">
  <select name="ft" id="cars" required>
  <option value="" selected>Select Options</option>
  <option value="TA/DA">TA/DA</option>
  <option value="Medical Reimbursment">Medical Reimbursment</option>
  <option value="Quarter Allocation">Quarter Allocation</option>
  <option value="Leave Request">Leave Request</option>
</select>
</div>
  <div class="col-sm-3 item"><input type="text" name="bnn" value = "<?php if (array_key_exists('bnn', $_POST)) {echo $_POST['bnn'];}?>" class="form-control" required></div>

  <div class="col-sm-3 item"><input type="submit" name="submit" class="btn btn-secondary" value="Create File"></div>

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
<h1>File Details:</h1>
<br>

<table class="table table-hover">
  <tr>
    <th>Token No</th>
    <th>File Title</th>
    <th>File Type</th>
    <th>Beneficiary Name</th>
    <th>Date of Origin</th>
    <th>Status</th>
    <th>Updated By</th>

  </tr>

  <?php

while($rows=$resultread->fetch_assoc()){



?>

  <tr>
    <td><?php echo $rows['tokenno']??''; ?></td>
    <td><?php echo $rows['filename']??''; ?></td>
    <td><?php echo $rows['filtetype']??''; ?></td>
    <td><?php echo $rows['beneficiaryname']??''; ?></td>
    <td><?php echo $rows['dateoforigin']??''; ?></td>
    <td><?php echo $rows['status']??''; ?></td>
    <td><?php echo $rows['updatedby']??''; ?></td>
   


  </tr>

  <?php
                }
            

?>
  
</table>

<br>


</div>

<?php
}else header("Location:index.php");
?>
</body>
</html>