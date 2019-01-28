<?php

header("content-type:image/jpeg");

$host = 'localhost';
$user = 'root';
$pass = ' ';

mysql_connect($host, $user, $pass);

mysql_select_db('hms');

$name=$_GET['name'];

$select_image="select * from users where image='$name'";

$var=mysql_query($select_image);

if($row=mysql_fetch_array($var))
{
 $image_name=$row["image"];
 $image_content=$row["imagecontent"];
}
echo $image;

?>