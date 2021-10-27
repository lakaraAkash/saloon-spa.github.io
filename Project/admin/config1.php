<?php
//include_once "include/functions.php";
//session_start();
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
	echo "error";
}
else
{
mysqli_select_db("salon_db");
}
?>