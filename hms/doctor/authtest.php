<?php
session_start();
ob_start();
require_once('include/configpdo.php');
include('include/config.php');
include('include/checklogin.php');
//error_reporting(0);

$query=mysqli_query($con,"select fullName, ic from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
  $fullname = $row['fullName'];
  $icnumber = $row['ic'];

};
?>