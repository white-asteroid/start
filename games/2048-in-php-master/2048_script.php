<?php
include '../../includes/common.php';
if(!isset($_SESSION['email']))
   {
      header('location:index.php');
   }
$score="";
$score= $_SESSION['sc'];
$uid=$_SESSION['u_id'];
$sq1="select * from gamedata where ug_id = '$uid' AND g_id = 1 " or die(mysqli_error($con));


$sqc1= mysqli_query($con, $sq1);
$sr= mysqli_fetch_array($sqc1);
$val = mysqli_num_rows($sqc1);
echo "<br>$val is val <br>";
if($val)
{
    $ns="";
     $ns=$sr[3];
    $sn="";
    echo "<br> score db:$ns <br>cur score : $score <br>";
$_SESSION['sn']= $ns;
$high="";
   
    if ($ns<$score)
    {
        $uq = "update gamedata SET score = '".$score."'  where ug_id='".$uid."' AND g_id= 1 " or die(mysqli_error($con));
        $uqc = mysqli_query($con, $uq) or die(mysqli_error($con));
        //already exist
        echo '<br>already user<br>';
        $_SESSION['sn']= $score;
        echo "<br> updated score :$score <br>";
        
    }
}

else
{
    $sn="";
$_SESSION['sn']= $ns;
$high="";
    $ii="INSERT INTO `gamedata`(`g_id`, `ug_id`, `score`) VALUES (1,'".$uid."','".$score."')" or die(mysqli_error($con));
    $iiq= mysqli_query($con, $ii) or die(mysqli_error($con));
    echo '<br>new user<br>';
}
$sn="";
$_SESSION['sn']= $ns;
$high="";
header('Location: 2048.php?high=$sn');


   

