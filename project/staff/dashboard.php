<?php

     
include('../config.php');
$check = new login;
$check->check_login();	
?>


<?php include(STAFF_PATH.'include/header.php'); ?>
<?php include(STAFF_PATH.'include/sidbar.php'); ?>







<?php


$gen = new general; 
	$user_profile_info = $gen->get_user_info_by_id($_SESSION['webapp']['user']['user_id']); 

	
?>
	
	
	<htlm>
<head>

<link rel="stylesheet" href="css/style.css">
 
</head>

<body>


<div class="main_body">	
<div class="main_inner">




<h1 style="margin-left:20px;padding-top:15px;">DASHBOARD</h1>
	<h2 style=" margin-left:300px;"><?php echo $user_profile_info['status'] ?> </h2>
<style>
table tr td
{
	background-color:#FFFFFF;}
table tr th
{
     text-align:center;background-color:#FFFFFF;
}
</style>
	



<div style="width:1100px; background-color:#FFFFFF; height:550px;">	
<table style=" width:600px;margin-left:50px;border-radius:10px;">	

	<tr>
	<th style="height:50px;width:150px;">User Name:</th>
	
		<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;"><?php  echo $user_profile_info['user_name'] ?></td>
		</tr>
		
		

	<tr>
	<th style="height:50px;width:150px;">User Type:</th>
	<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;"><?php echo $user_profile_info['user_type'] ?> </td>
	</tr>
	<img src="image/<?php echo $user_profile_info['user_photo']; ?>" style="max-width:120px;float:right;margin-right:80px; margin-top:-50px;border-radius:50px;">
	</table>
	
	
	
</div>   	
	

</div>	
</div>
</body>



</html>
