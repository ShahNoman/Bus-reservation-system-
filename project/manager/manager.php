<?php

     
include('../config.php');
$check = new login;
$check->check_login();	
?>

<html>
<link rel="stylesheet" href="css/style.css">

<body>

<?php include(MANAGER_PATH.'include/header.php'); ?>
<?php include(MANAGER_PATH.'include/sidbar.php'); ?>







<?php


$gen = new general; 
	//$table_data = $gen->table_data('user_tbl',"where user_type = 'CUSTOMER'","","");  

	

	$user_profile_info = $gen->get_user_info_by_id($_SESSION['webapp']['user']['user_id']);
	
?>	
	<htlm>
<head>

<link rel="stylesheet" href="css/style.css">
 
</head>

<body>


<div class="main_body">	
<div class="main_inner">



<div class="form_insert">

	
<style>
table tr td
{
	text-align:center;border-top:2px solid #ECF5ED;border-left:2px solid #ECF5ED;background-color:#FFFFFF;}
table tr th
{
     text-align:center;border-top:2px solid #000;border-left:2px solid #000;background-color:#FFFFFF;
}
</style>
	


<img src="image/<?php echo $user_profile_info['user_photo']; ?>" style="max-width:50px;float:right;margin-right:10px;border-radius:50px;">
	
<table style="border-bottom:2px solid #ECF5ED;border-right:2px solid #ECF5ED; width:1100px;margin:0 auto;border-radius:10px;">	

	

	

	<tr>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">Manager Name</th>
	
		<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;border-color:#ECF5ED;"><?php  echo $user_profile_info['user_name'] ?></td>
		</tr>
		
		<tr>
		 
<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">	Manager Fullname</th>
		<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;border-color:#ECF5ED;"><?php echo $user_profile_info['user_fullname'] ?> </td>
	</tr>
	
		<tr>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">Password</th>
	<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;border-color:#ECF5ED;">	<?php echo $user_profile_info['password'] ?> </td>
	</tr>

	
	
		
	<tr>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">Emial</th>
	<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;border-color:#ECF5ED;"><?php echo $user_profile_info['email'] ?> </td>
	</tr>
		<tr>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">City</th>
	<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;border-color:#ECF5ED;"><?php echo $user_profile_info['city'] ?></td>
	</tr>
	<tr>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">Gender</th>
	<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;border-color:#ECF5ED;"><?php echo $user_profile_info['gender'] ?> </td>
	</tr>
	<tr>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">Date Of Birth</th>
	<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;border-color:#ECF5ED;"><?php echo $user_profile_info['date_birth'] ?></td>
	</tr>
	<tr>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">Contact No</th>
		
		<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;border-color:#ECF5ED;">	<?php echo $user_profile_info['contact_no'] ?> </td>
	</tr>
		
	
	
	</table>
	
	</div>
	
		
	<div style="width:300px; height:60px;margin:0 auto;">
	
	
		<a href="<?php echo  MANAGER_URL.'edit.php?user_id='.$_SESSION['webapp']['user']['user_id'] ?>" style="text-decoration:none;"><h1>UPDATE PROFILE</h1></a>
		
		
   </div>
   	
	

	
 
 
 </div>
 
</div>
	



</body>



</html>
