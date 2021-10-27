<?php
include("config1.php");
$_SESSION["user"] = null;
session_destroy();
header('location:admin/login.php');

?>