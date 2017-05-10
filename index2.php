<?php
session_start();
$_SESSION=null;
session_unset();
header("Location:index.php");
//echo "CTCCBZ".$_SESSION['auth'];
//require_once "bd.php";
?>