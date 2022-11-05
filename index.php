<?php include_once("signupbackend.php"); ?>
<?php include_once("signinbackend.php"); ?>
<?php
if($_SESSION["username"]) {
  header("Location:home.php");
}
else{
?>
<html>
    <head>
        <title>Police File Tracker</title>
        <link rel = "icon" href="up_police_icon.ico" type = "image/x-icon"> 
                <script src="linksfunctionality.js"></script>
<link rel="stylesheet" href="indexstyle.css">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            .container{
                text-align: center;
                margin-top: 160px;
                width: 400px;
            }
            /*body {
                background-image:url(Column_2-696x464.jpg);
                  
                background-repeat: no-repeat;
                background-attachment: fixed; 
                background-size: 100% 100%;
              }*/
              
        </style>
        
    </head>
    <body>
        <div class="container">
            <h1>Personnel Login</h1>
            
<div id="signup">
        <form method="post" class="margin" autocomplete="off">
  <fieldset class="form-group">
    <label for="uname">Enter the UserName</label>
    <input type="text" required class="form-control centre" id="uname"  name="uname">
      <label for="pass">Enter the Password</label>
    <input type="password" required class="form-control centre" id="pass"  name="pass">
                                                                                        
      
  </fieldset>
  
  
  <button type="submit" class="btn btn-default">Sign Up</button>
            

</form>
                        <b><p>Have an account? Click here to <a href="#" onclick='myFunction()'>Sign In</a>.</p></b>
</div>
            
      <div id="signin">
            <form method="post" class="margin" autocomplete="off">
  <fieldset class="form-group">
    <label for="uname2">Enter the UserName</label>
    <input type="text" required class="form-control centre" id="uname2"  name="uname2">
      <label for="pass2">Enter the Password</label>
    <input type="password" required class="form-control centre" id="pass2"  name="pass2">
                                                                                        
      
  </fieldset>
  
  
  <button type="submit" class="btn btn-default">Sign In</button>
                
                

</form>
               <b><p>Don't have an account? Click here to <a href="#" onclick='myFunction()'>Sign Up</a>.</p></b>

            
            </div>      
            
           <?php
    

    
            if(isset($msg)){    ?>  

            
            <div class="alert alert-success margin">
      <?php
    
        echo $msg;
        
    
    ?>
  </div>    
         <?php } ?>


         <?php
    

    
            if(isset($msg5)){    ?>  

            
            <div class="alert alert-danger margin">
      <?php
    
        echo $msg5;
        
    
    ?>
  </div>    
         <?php } ?>

        
        
    </div>
    </body>
</html>




<?php } ?>
