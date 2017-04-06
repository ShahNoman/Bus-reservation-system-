<?php

     
include('../config.php');
$page = 'profile';	
$check = new login;
$check->check_login();
?>


<?php include(ADMIN_PATH.'include/header.php'); ?>
<?php include(ADMIN_PATH.'include/sidbar.php'); ?>







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
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">Admin Name</th>
	
		<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;border-color:#ECF5ED;"><?php  echo $user_profile_info['user_name'] ?></td>
		</tr>
		
		<tr>
		 
<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">	Admin Fullname</th>
		<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;border-color:#ECF5ED;"><?php echo $user_profile_info['user_fullname'] ?> </td>
	</tr>
	
		<tr>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">Password</th>
	<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;border-color:#ECF5ED;">	<?php echo $user_profile_info['password'] ?> </td>
	</tr>

	<tr>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">User Type</th>
	<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;border-color:#ECF5ED;"><?php echo $user_profile_info['user_type'] ?> </td>
	</tr>
	
	
	
	<tr>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">Status</th>
	<td style="color:#B8C7CE;background-color:#FFFFFF;height:50px;width:550px;border-color:#ECF5ED;"><?php echo $user_profile_info['status'] ?> </td>
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
	
	<div style="width:65px; height:40px;float:left;margin-left:300px;">
	
	
		<a href="<?php echo  ADMIN_URL.'edit.php?user_id='.$user_profile_info['user_id'] ?>"><img src="image/edit.png" style=" width:65px;height:40px;"></a>
		
		
   </div>
   	
	

</div>	
</div>
</body>



</html>
