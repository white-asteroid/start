<?php
    include 'includes\common.php';
    if(isset($_SESSION['email']))
    {
        header('location: products.php');
    }
    ?>
<!DOCTYPE html>
<!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.-->
<html>
    <head>
        <title>Lifestyle store</title>
        <meta charset="UTF-8">
  <meta charset="UTF-8">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link href="bootstrap-4.5.2-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <script src="bootstrap-4.5.2-dist/js/bootstrap.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>        
        
    </head>
    <body style="background-color: black">
         <?php
        include 'includes\header.php';
        ?>
        <div class="container" style="margin-top:90px;">
            <div class="row">
                 <div class="col-md-5">
      
                    <img src="includes/img/signuplogo.jpg" alt="Sigup_jpg" style="min-width: 60%; max-width: 90%" class="w3-hover-sepia"/>
                </div>
                <div class="col-md-4 offset-md-3 col-xs-11 w3-animate-top" style="text-align:left ;">
                    <p style="font-size: 30px ;font-weight: bold ; color: #ffffff" >Sign Up</p>
                    <form method="post" action="signup_script.php">
                        <div class="form-group">
                            <input type="text" id="name" placeholder="Name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   placeholder="abc@gmail.com" 
                                   class="form-control"
                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                   title="Invalid Email"
                                   required
                                   >
                         <?php   if(isset($_SESSION['err']))
                         {
                             echo "Error in email id";
                         } ?>
                        </div>
                        <div class="form-group">
                            <input type="password" 
                                   
                                   titl="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" 
                                   id="pass" 
                                   name="pass" 
                                   placeholder="Password" class="form-control"
                                   required>
                        </div>
                        
                        
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg" style="margin-bottom: 20px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div style="bottom: 0px;">
     <?php
     
   
   include 'includes/footer.php ';
     ?>
        </div>
    </body>
</html>