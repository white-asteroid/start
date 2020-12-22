<?php
include '../../includes/common.php';
if(!isset($_SESSION['email']))
   {
      header('location:../../main.php');
   }
$score="";
$score=$_GET['scc'];
echo "score is $score";

$uid=$_SESSION['u_id'];
$sq1="select * from gamedata where ug_id = '$uid' AND g_id = 2 " or die(mysqli_error($con));

$sqc1= mysqli_query($con, $sq1);
$sr= mysqli_fetch_array($sqc1);
$val = mysqli_num_rows($sqc1); 
echo "<br>$val is val <br>";
if($val)
{
    $ns=$sr[3];  
    echo "prev Hscore: $ns<br > cs : $score";
    if ($ns<$score)
    {
        $uq = "update gamedata SET score = '".$score."'  where ug_id='".$uid."' AND g_id= 2" or die(mysqli_error($con));
        $uqc = mysqli_query($con, $uq) or die(mysqli_error($con));
        //already exist
        echo '<br>already user<br>';
        $sr[3]=$score;
        
    }
}

else
{
    $ii="INSERT INTO `gamedata`(`g_id`, `ug_id`, `score`) VALUES (2,'".$uid."','".$score."')" or die(mysqli_error($con));
    $iiq= mysqli_query($con, $ii) or die(mysqli_error($con));
    echo '<br>new user<br>';
    $sr[3]="0";
}
$hs="";
$_SESSION['hs']=$sr[3];
echo "session set hs is $sr[3]";
header('location:snake.php');
