
<?php include 'includes\common.php';
if(isset($_SESSION['email']))
   {
       header('location:index.php');
   }
$em= $_POST['email'];
$em=mysqli_real_escape_string($con,$em);
$pa=$_POST['pass'];
$pa=mysqli_real_escape_string($con,$pa);
//$pa= md5($pa);                                                              //for security 
$sq="SELECT * FROM user WHERE email = '".$em."' AND pass='".$pa."' " or die(mysqli_error($con));


$sqc= mysqli_query($con, $sq) ;
$sr= mysqli_fetch_array($sqc) ;

$check = "";
$val = mysqli_num_rows($sqc);
//echo "$val is value of val";
if ($val !=0){                               //if id and pass are correct and matches to each other
    //echo 'correct id pass';
    /*$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : .";
                $headers = "From: password@studentstutorial.com" . "\r\n" .
                "CC: somebodyelse@example.com";
                mail($to,$subject,$txt,$headers);*/
    $email="";
    $u_id="";
     $_SESSION['email']=$sr[2];
     $_SESSION['u_id']=$sr[0];
     $_SESSION['user_id']=$sr[0];
     
    //echo $sr[0];
     $check = $sr['u_id'];
     //echo "$check is sr id <br>";
    header('location:index.php');
}
else {                                                      
                     //id pass galat haii toh 
     header('location:includes/wrong.php');
?>
<!--
<html>
    <head>
        <title>
            Wrong id pass
        </title>
            <meta charset="UTF-8">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../bootstrap-4.5.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <style>
       .wrb{
               
                background-color: green;
                font-size: 10px;
                width: 160px;
                height: 60px;
                padding: 0px;
            }
        </style>
    </head>
    
   
        <div class="container">
     <div class="row">
         <div class="col-xs-5 offset-4">
         
             <p class="text-center">Wrong ID or Password</p>
         </div> 
     </div>
        <div class="row">
        <div class="col-xs-3 offset-4 wrb">
            <a href="index.php" style="text-decoration: none;color: white; font-size: 35px;text-align: center">Try again!</a>
        
        </div>
   
     
    </div></div>
</html>-->
<?php
//echo " value of pass $pa and email $em";
$errl="";
//$_SESSION['errl']="wrong";
//header('location:index.php');    
}
//header('location:index.php');
?>

    
