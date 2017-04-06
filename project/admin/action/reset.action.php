<?php
include('../../config.php');
$db= new connection;

$time = date('Y-m-d H:i:s');
$time_int = strtotime($time);

/*
print "<pre>";
print_r($_POST);
exit;
*/

$query = "select * from user_tbl";
$where = "where random_number = '".$_POST['code']."'  ";
$order = "";
$limit = "";

$data = null;

$data = $db->fetch_rows($query,$where,$order,$limit);


if(count($data)>0)
{

	$vals = null;
	$set = "random_number = '', password = '".md5($_POST['password'])."' ";
	$where = "random_number = '".$_POST['code']."' ";
	$db->update("users",$set,$where);


	$_SESSION['webapp']['error_msg'] = "Password Updated";
	echo '<script>location.replace("'.ADMIN_URL.'login.php")</script>';
}
else
{
	$_SESSION['webapp']['error_msg'] = "Reset Link Expired";
	echo '<script>location.replace("'.ADMIN_URL.'login.php")</script>';
}
?>
