<?php
require_once "bd.php";
$email=$_POST['email'];
/*echo $email;*/

$fio=$_POST['fio'];
/*echo $fio;*/

$phone=$_POST['phone'];
/*echo $phone;*/


$login=$_POST['login'];
/*echo $login;*/


$password=$_POST['password'];
/*echo $password;*/

$qver=$bd->query("INSERT INTO users SET email='".$email."', fio='".$fio."', phone='".$phone."', login='".$login."', password='".$password."'");
if ($qver) header("Location:index.php");
else echo "ошибка";
$bd->close();