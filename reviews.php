<?php
session_start();
require_once "bd.php";
$fio=$_POST['fio'];
/*echo $fio;*/

$message=$_POST['message'];
/*echo $message;*/

var_dump($_SESSION);
if ($_SESSION['auth']===1) {
$qver=$bd->query("INSERT INTO reviews SET fio='".$fio."', message='".$message."'");
if ($qver) header("Location:index.php");
else echo "ошибка";}
else die("Зарегистрируйтесь, чтобы оставлять коменты");
$bd->close();