<?php

include 'includes\common.php';

    if(!isset($_SESSION['email']))
    {
        header('location:index.php');
    }
    $u_id="";
    $pass="";

$u_id=$_SESSION['u_id'];
$pass=$_POST['opass'];
//$pass= md5($pass);
$erm="";
echo "$pass is pass from form old <br> $u_id is user id ssn<br>";
$query= "SELECT * FROM user WHERE u_id = '".$u_id."' AND pass= '".$pass."' " ;
$qc= mysqli_query($con, $query) ;
$qr=mysqli_fetch_array($qc);
//echo $qr['email'];
echo "$u_id is id from form <br>";
echo "<br> $pass is pass from form ";
//echo "from db $qr[0] is id and $qr[3] is pass <br>";
$num=0;
$num= mysqli_affected_rows($con);
echo $num." is value from select<br>";
if($num!=1)
{
    echo '<strong>WRONG PASSWORD</strong>';
    echo 'Redirecting... ';
   // header('location:settings.php?erm=Wrong password');
      
}

$origpass="";

$origpass = $qr[3];
echo "<br> $origpass pass from db<br>";
$npass=$_POST['npass'];
$cpass=$_POST['cpass'];
$nu= strcmp($npass,$cpass);
if($nu!=0)
{
    echo "<br>new pass mismatch $cpass : $pass <br>";
    
    //header("location:settings.php?erm=New password mismatch... Try Again!!');
}
//$npass=md5($npass);
$uq= " update user set pass='".$npass."' where u_id='".$u_id."' AND pass = '".$pass."' ";
$uqc= mysqli_query($con, $uq) or die(mysqli_error($con));
$num= mysqli_affected_rows($con);
if($num)
{
    echo "bahut bdia ";
   header('location:main.php');
}
//echo $numu;





