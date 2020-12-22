
<?php
include 'includes\common.php';
if(isset($_SESSION['email']))
   {
      header('location:products.php');
   }
$em= mysqli_real_escape_string($con, $_POST['email']);
$em1=$_POST['email'];
$nm=mysqli_real_escape_string($con, $_POST['name']);
$pa=mysqli_real_escape_string($con, $_POST['pass']);
//$pa= md5($pa);
$pat="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/";
//echo preg_match($pat,$em1);
//echo " is result of pat";
if(!preg_match($pat,$em1))
{
    $err="";
    header('location:signup.php?err=e');

    //echo"checking pat";
}
else{

$sq1="select email from user where email = '$em'" or die(mysqli_error($con));


$sqc1= mysqli_query($con, $sq1) or die(mysqli_error($con));
$sr= mysqli_fetch_array($sqc1); //collecting data from data base to check if email id is already registered ;



$val = mysqli_num_rows($sqc1);
 //echo "$val is val <br>";
if($val)
{
  //  USER ID ALREADY EXISTS window.location.href=login.php;
    
    echo $val;
    $msg="";
    include 'includes/alreadyuser.php';
    
    
}
else
{
    //alll set to insert user data in database
    echo "inserting $nm , $em ,$pa";
    
    $sq="INSERT INTO `user`(`u_id`, `name`, `email`, `pass`) VALUES  (NULL,'".$nm."','".$em."','".$pa."')" or die(mysqli_error($con));
    $sqc= mysqli_query($con, $sq);
    $af= mysqli_affected_rows($con);
    $_SESSION['user_id']= mysqli_insert_id($con);
    $_SESSION['email']=$em;
   
  header('location:main.php');
    
    
    
}

}

