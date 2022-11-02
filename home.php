<?php
session_start();
error_reporting(0);
?>
<html>
<head>
<title>Police File Tracker</title>
<link rel = "icon" href="up_police_icon.ico" type = "image/x-icon"> 
<script src="linksfunctionality.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
<?php
if($_SESSION["username"]) {
?>
<div class="container">

<h4>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?>.  <button id="logout" onclick="myFunction2()" type="button">Logout</button>   </h4>
<hr>
<h1>Upload File Details:</h1>

<div class="container">
  
 
  
  <br>
<form method="post" autocomplete="off">
  <div class="row">
  <div class="col-sm-3 item"><b>File Title</b></div>
  <div class="col-sm-2 item"><b>Date of Origin</b></div>
  <div class="col-sm-2 item"><b>File Type</b></div>
  <div class="col-sm-3 item"><b>Beneficiary Name</b></div>
</div>
<br>

<div class="row">
  <div class="col-sm-3 item"><input type="text" name="rname" value = "<?php if (array_key_exists('rname', $_POST)) {echo $_POST['rname'];}?>" class="form-control" required></div>
  <div class="col-sm-2 item"><input type="date" name="cname" value = "<?php if (array_key_exists('cname', $_POST)) {echo $_POST['cname'];}?>" class="form-control" required></div>
  <div class="col-sm-2 item">
  <select name="cars" id="cars" required>
  <option value="" selected>Select Options</option>
  <option value="TA/DA">TA/DA</option>
  <option value="Medical Reimbursment">Medical Reimbursment</option>
  <option value="Quarter Allocation">Quarter Allocation</option>
  <option value="Leave Request">Leave Request</option>
</select>
</div>
  <div class="col-sm-3 item"><input type="text" name="loc" value = "<?php if (array_key_exists('loc', $_POST)) {echo $_POST['loc'];}?>" class="form-control" required></div>

  <div class="col-sm-2 item"><input type="submit" name="submit" class="btn btn-secondary" value="Submit Details"></div>

</div>
<br>
<!--
<div class="row">
<div class="col-sm-3 item"><b>DO Number</b></div>
  <div class="col-sm-3 item"><b>Phone Number</b></div>
</div>

<br>

<div class="row">
  <div class="col-sm-3 item"><input type="text" name="wbst" value = "<?php if (array_key_exists('wbst', $_POST)) {echo $_POST['wbst'];}?>" class="form-control" required></div>
  <div class="col-sm-3 item"><input type="number" name="phno" value = "<?php if (array_key_exists('phno', $_POST)) {echo $_POST['phno'];}?>" class="form-control" required></div>
  <div class="col-sm-3 item"><input type="submit" name="submit" class="btn btn-secondary" value="Submit Details"></div>


  

</div>
-->
</form>
<hr>
<h1>File Details:</h1>
<br>
<table>
  <tr>
    <th>Token No.</th>
    <th>File Title</th>
    <th>Date of Origin</th>
    <th>File Type</th>
    <th>Beneficiary Name</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>

  
  
</table>


<!--
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    <label for="fname">Title</label>
      
    </div>
    <div class="col-sm-3">
     <label for="fname">Date of Origin</label>
    </div>
    <div class="col-sm-3">
          <label for="fname">File Type</label>

    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
    <input type="text" required id="fname" autocomplete="off" name="fname">
    </div>
    <div class="col-sm-3">
    <input type="date" required>
</div>
    <div class="col-sm-3">
    <select name="cars" id="cars">
    <option value="" selected>Select Options</option>
  <option value="TA/DA">TA/DA</option>
  <option value="Medical Reimbursment">Medical Reimbursment</option>
  <option value="Quarter Allocation">Quarter Allocation</option>
  <option value="Leave Request">Leave Request</option>
</select>    </div>
<div class="col-sm-3">

  <input type="submit">
</div>
  </div>
  <br>


-->
</div>

<?php
}else header("Location:index.php");
?>
</body>
</html>