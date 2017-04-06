<?php 
	include('connection.php');



$id = $_GET['id'];
mysql_query("delete from ali_tb where id = '$id' ");

header("location:view.php");
?>