<?php
$host='localhost';
$user='root';
$pass='';
$dbname='contact';
$con=mysqli_connect($host,$user,$pass,$dbname);
if(!$con)
{
	die("Error deleting record:".mysqli_error($con));
}
?>