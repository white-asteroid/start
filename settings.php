<?php 
   include 'includes\common.php';
   if(!isset($_SESSION['email']))
   {
       header('location:index.php');
   }
   
   ?>
<html>
   <head>
      <title>Lifestyle store</title>
      <meta charset="UTF-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link href="bootstrap-4.5.2-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <script src="bootstrap-4.5.2-dist/js/bootstrap.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="css/w3.css" rel="stylesheet" type="text/css"/>
  <link href="css/stylephp.css" rel="stylesheet" type="text/css"/>
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <link href="css/stylephp.css" rel="stylesheet" type="text/css"/>
      
   </head>
   <body>
      <?php 
         include 'includes\header.php';
         ?>
      <div style="top:20px ;position: relative; padding: 50px;">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 offset-md-4 col-xs-12 offset-xs-0" style="text-align:left ;">
                   <div class="text-uppercase text-center alert-danger" style="font-weight:bold">
                       <?php
                       if(isset($_GET['erm']))
                       {
                           echo $_GET['erm'];
                       }?>
                   </div>
                   <div class="card" style="border: 1px solid #337AB7">
                      <div class="card-heading text-center" style="background-color: #337AB7; padding :9px;color: white">
                        change password
                     </div>
                     <div class="card-body">
                        <p class="text-warning ">Set a strong Password</p>
                        <form method="post" action="settings_script.php">
                           <div class="form-group">
                               <label for="opass">Old Password</label>
                              <input type="password" class ="form-control" name="opass" id="opass" placeholder="password123*">
                           </div>
                            <div class="form-group">
                                <label for="npass">New Password</label>
                            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" id="npass" name="npass" placeholder="Password" class="form-control">
                                                    
                        </div>
                            <div class="form-group">
                                <label for="cpass">Retype Password</label>
                            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" id="cpass" name="cpass" placeholder="Password" class="form-control">
                                                    
                        </div>
                           <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-lg">Change</button>
                           </div>
                           <br><br>
                           <div class="card-footer">
                               <span class="text-info">Click below if you want to log in?</span>
                               <a style="color: black;text-decoration: none" class="" data-toggle="modal" data-target="#qbx">
                                <p>
                                    <i class="fas fa-sign-in"></i>
                                    Log in
                                </p>
                               </a>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
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