<?php
include 'includes\common.php'; 
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<html>
    <head>
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
  <link href="css/w3.css" rel="stylesheet" type="text/css"/>
  <link href="css/stylephp.css" rel="stylesheet" type="text/css"/>
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <link href="css/stylephp.css" rel="stylesheet" type="text/css"/>
 <style>
     
     a.onho:hover{
         color:white;
     }
     .G1{
         
         padding: 15px ; 
         margin: 50px;
         height: 500px;
     }
     .G2
     {
         padding: 15px ; 
         margin: 50px;
         height: 500px;
     }
     .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 200px;
     
}
     </style>
    </head>
    <body>
        <?php
        include 'includes\header.php';
        ?>
        <div style="padding-bottom: 50px;
 margin-bottom: 0px;
 text-align: center;
 color: #f8f8f8;
 background: url(includes/img/back4.png) no-repeat center;
 background-size: cover;
 height: 100%;">
            <div>
                <a style=" text-decoration: none;background-color: black;" 
                   class="w3-button w3-hover-opacity w3-animate-top"
                   href="#g1"><p class="w3-hover-sepia ">2048</p></a>
                   <a style=" text-decoration: none;background-color: black;" 
                   class="w3-button w3-hover-opacity w3-animate-top"
                   href="#g2"><p class="w3-hover-sepia ">Snake</p></a>
                   <a style=" text-decoration: none;background-color: black;" 
                   class="w3-button w3-hover-opacity w3-animate-top"
                   href="#g3"><p class="w3-hover-sepia ">ping-pong</p></a>
                   <a style=" text-decoration: none;background-color: black;" 
                   class="w3-button w3-hover-opacity w3-animate-top"
                   href="#g4"><p class="w3-hover-sepia ">Piano</p></a>
                   
        </div>
           <?php 
                /*if(isset($_SESSION['errl']))
                         { ?>
            <script>alert("wrong ID or PASSWROD")</script>
                   
             <?php    
         unset($_SESSION['errl']);
             
                         } */
                ?>
        </div>
        
        
        <?php
         if(isset($_SESSION['email']))
   { ?>
    
        <div class="container-fluid">
            <!-- 2048 game -->
            
            <div class="row"> <!-- 2048  game-->
              
        <div class="G1 col-xs-5" id="g1">
            
            <a href="games/2048-in-php-master/2048.php">
                <img src="includes/img/G1.PNG" alt="2048"/ class="w3-animate-left img-fluid float-left">
            </a>
        </div>
                <div class="offset-3 col-xs-4" style="margin-top: 200px; display: block;">
                    <a href="././games/2048-in-php-master/2048.php" class="button w3-hover-aqua" style="text-decoration: none ;">Play</a> 
                </div>
        </div>
            <!-- snake game -->
            <div class="row" style="background-color : #cc00ff; padding: 20px">
                <div class="offset-2 col-xs-4"  style="margin-top: 170px; display: block;">
                    <a href="././games/snake/snake.php" class="button w3-hover-black" style="text-decoration: none ;">Play</a> 
                
                </div>
                 <div class="col-xs-5 offset-4" id="g2">
                     <a href="games/snake/snake.php">
                    <img src="includes/img/snake.PNG" alt="snake" class="w3-animate-left img-fluid float-right" style="height: 350px;">
            </a>
                 </div>
            </div>
            
             <div class="row"> <!-- PONG  game-->
              
        <div class="G1 col-xs-5" id="g3">
            
            <a href="games/pong/pong.php">
                <img src="includes/img/pong.PNG" alt="2048" class="w3-animate-left img-fluid float-left" style="height: 350px;">
            </a>
        </div>
                <div class="offset-4 col-xs-4" style="margin-top: 200px; display: block;">
                    <a href="games/pong/pong.php" class="button w3-hover-aqua" style="text-decoration: none ;">Play</a> 
                </div>
        </div>
            <div class="row" style="background-color : #cc00ff; padding: 20px">
                <div class="offset-2 col-xs-4"  style="margin-top: 170px; display: block;">
                    <a href="games/piano/piano.php" class="button w3-hover-black" style="text-decoration: none ;">Play</a> 
                
                </div>
                 <div class="col-xs-5 offset-3" id="g4">
                     <a href="games/piano/piano.php">
                    <img src="includes/img/piano.PNG" alt="snake" class="w3-animate-left img-fluid float-right" style="height: 350px;width:460px">
            </a>
                 </div>
            </div>
            
            
        </div>
        <div style="bottom: 0px;">
     <?php
     
   }
   include 'includes/footer.php ';
     ?>
        </div>
    </body>
</html>
