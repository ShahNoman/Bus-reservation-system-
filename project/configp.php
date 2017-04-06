<?php
session_start();
error_reporting(0);
define:(HOST,"localhost");

if(HOST=='localhost');	
{


 define(URL;'http://'.$_SERVER['HTTP_HOST'].'/project/');
 define(ADMIN_URL;'http://'.$_SERVER['HTTP_HOST'].'/project/admin/');
 define(ADMIN_URL;'http://'.$_SESSION['HTTP_HOST'].'/project/admin/');
 
 
define(PATH;.$_SERVER['DOCUMENT_ROOT'].'/project/');



}

define(HOST,"localhost");
define(USER,"root");
define(PASS,"");
define(DB,"database name");



?>