<?php
include('../../config.php');

$db= new connection;



$query = "select * from  user_tbl";
$where = "where user_name = '".$_POST['user_name']."' and password = '".$_POST['password']."' ";
$order = "";
$limit = "";

$data = null;


unset($_SESSION['user']);

$data = $db->fetch_rows($query,$where,$order,$limit);


if(count($data)>0)
{


	$_SESSION['webapp']['user']['user_id']  = $data[0]['user_id'];
	$_SESSION['webapp']['user']['username'] = $data[0]['user_name'];
	$_SESSION['webapp']['user']['usertype'] = $data[0]['user_type'];
	
if($_SESSION['webapp']['user']['usertype'] == "ADMIN")
	{header('location: '.ADMIN_URL.'admin.php');}
	
	elseif($_SESSION['webapp']['user']['usertype'] == "CUSTOMER")
	{header('location: '.CUSTOMER_URL.'dashboard.php');}
	
	
		elseif($_SESSION['webapp']['user']['usertype'] == "STAFF")
	{header('location: '.STAFF_URL.'dashboard.php');}
	
		elseif($_SESSION['webapp']['user']['usertype'] == "MANAGER")
	{header('location: '.MANAGER_URL.'dashboard.php');}
	
	

	exit;
}
else
{


	$_SESSION['webapp']['error_msg'] = "Invalid Username Or Password";
	header('location: '.ADMIN_URL.'login.php');
	exit;
}
?>