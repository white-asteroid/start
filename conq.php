<?php
include 'includes\common.php';
$em=$_POST['email'];
$em= mysqli_real_escape_string($con, $em);
$nm=$_POST['name'];
$nm= mysqli_real_escape_string($con, $nm);
$msg=$_POST['msg'];
$msg= mysqli_real_escape_string($con, $msg);

$query="INSERT INTO `feedback`(`name`, `email`, `message`) VALUES ('".$nm."' , '".$em."' , '".$msg."' )";
$res= mysqli_query($con, $query)or die(mysqli_error($con));
$num= mysqli_affected_rows($con);
if($num)
{
    $suc="";
    header('location:contactus.php?suc=good');
}
