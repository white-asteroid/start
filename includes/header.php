<?php
   include 'common.php';?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark" >
   <div class="container">
      <diiv class="w3-hover-sepia ">
         <div class="navbar-header">
            <a class="navbar-brand navbar-nav navbar-left"  href="index.php">RelaxGamez</a>
         </div>
      </diiv>
      <div class="col-xs-9"></div>
      <button class="navbar-toggler" style="float: right" type="button" data-toggle="collapse" data-target="#myNavbar2">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div >
         <div class="collapse navbar-collapse" id="myNavbar2">
            <ul class="navbar-nav" style="float:right; margin-top: 7px" >
               <?php 
                  if (!isset($_SESSION['email']))
                  {
                  ?>
               <li class="navbar-item"">
                  <a href="signup.php" class="">
                  <span class="fas fa-user " style="color:#ffffff;"> Sign up |</span>
                  </a>
               </li>
               <li>
                  <a style="color: white;text-decoration: none" class="" data-toggle="modal" data-target="#qbx">
                     <p>
                         <i class="fas fa-sign-in"></i>
                        Log in
                     </p>
                  </a>
               </li>
               <?php }
                  else {
                      
                  /*<li>
                  <a href="cart.php">
                  <span class="glyphicon glyphicon-shopping-cart " style="color:#ffffff;"></span>
                  </a>
                  </li>*/?>
               <li class="navbar-item w3-text-white" ><a href="SETTINGS.php" style="text-decoration: none"><i class="fas fa-cog"></i> <span style="color:white">Settings |</span></a></li>
               <li class="navbar-item w3-text-white"><a href="logout.php" style="text-decoration: none"><i class="fas fa-sign-out-alt"></i><span style="color:white"><span style="color:white">Log out</span></a></li>
               <?php } ?>
            </ul>
         </div>
      </div>
   </div>
</nav>
<?php
include 'login.php';