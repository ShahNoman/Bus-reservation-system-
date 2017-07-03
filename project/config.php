<?php
session_start();
error_reporting(0);
define(HOST,"localhost");


if(HOST=='localhost')
{
    //URL
	define(URL,'http://'.$_SERVER['HTTP_HOST'].'/project/');
	define(ADMIN_URL,'http://'.$_SERVER['HTTP_HOST'].'/project/admin/');
	define(CUSTOMER_URL,'http://'.$_SERVER['HTTP_HOST'].'/project/customer/');
	define(MANAGER_URL,'http://'.$_SERVER['HTTP_HOST'].'/project/manager/');
	define(STAFF_URL,'http://'.$_SERVER['HTTP_HOST'].'/project/staff/');
	//path
	define(PATH,$_SERVER['DOCUMENT_ROOT'].'/project/');
	define(ADMIN_PATH,$_SERVER['DOCUMENT_ROOT'].'/project/admin/');
	define(CUSTOMER_PATH,$_SERVER['DOCUMENT_ROOT'].'/project/customer/');
	define(MANAGER_PATH,$_SERVER['DOCUMENT_ROOT'].'/project/manager/');
	define(STAFF_PATH,$_SERVER['DOCUMENT_ROOT'].'/project/staff/');
}

// commit
include('admin/classes/mysqli.class.php');
include('admin/classes/login.class.php');
include('admin/classes/general.class.php');


define(HOST,"localhost");
define(USER,"root");
define(PASS,"");
define(DB,"bus reservation");

?>