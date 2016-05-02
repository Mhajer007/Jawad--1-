<?php 
$host = "jawad.one.mysql";
$user = "jawad_one";
$password ="j@w@d007";
$db = "jawad_one";

$con = mysqli_connect($host,$user,$password,$db);

if(mysqli_connect_errno($con))
{
	echo mysqli_connect_errno();
}

?>