<?php
require_once "bd.php";
session_start();
$login=$_POST['login'];
/*echo $login;*/


$password=$_POST['password'];
/*echo $password;*/

$qver=$bd->query("SELECT * from  users WHERE login='".$login."' and password='".$password."'");
if ($qver) {

while ($res=$qver->fetch_assoc())
	$info=$res;

if ($info['id'])  { $_SESSION['auth']=1; header("Location:index.php"); }
else echo "нет такого юзера";
}
