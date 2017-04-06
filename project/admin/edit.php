<?php 
 include('../config.php');

	
	$check = new login;
$check->check_login();


/*
print_r($_FILES);
exit;
*/
	

	
/*
print "<pre>";
print_r($_POST);
print_r($_FILES);
print "</pre>";
*/	
	
    $gen = new general; 
	$editdata = $gen->editdata('user_tbl','user_id',$_GET['user_id']); 
		
	
?>

<?php include(ADMIN_PATH.'include/header.php'); ?>
<?php include(ADMIN_PATH.'include/sidbar.php'); ?>

<htlm>
<head>

<link rel="stylesheet" href="css/style.css">
 
</head>

<body>


<div class="main_body">	
<div class="main_inner">
<div class="form_insert">
	<h1>Update</h1>
					<h3 style="text-align:center;color:#FF0000;"> <?php
					if(isset($_SESSION['webapp']['message'])){echo $_SESSION['webapp']['message']; unset($_SESSION['webapp']['message']);}
				?></h3>
	
	
	<form action="<?php echo ADMIN_URL; ?>action/general.action.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="user_id" value="<?php echo $id; ?>">
	<tr>
	<td>Enter name<br><br>
	</td><td>	<input type="text" name="user_name" value="<?php  echo $editdata['user_name']; ?>" style="width:900px;height:35px;"></td></tr>
	<tr>
	<br><br>
	<td>Enter Full name</td><br><br>
	<td>	<input type="text" name="user_fullname" value="<?php echo $editdata['user_fullname']; ?>"  style="width:900px;height:35px;"></td></tr>
	<br><br>
	
	<tr>
	<td>Enter user_type</td><br><br>
	<td><input type="text" name="user_type" value="<?php echo $editdata['user_type']; ?>"  style="width:900px;height:35px;"></td></tr>
	<br><br>
	<tr>
	<td>Enter your user_photo</td><br><br> 
	<td><img src="image/<?php echo $editdata['user_photo'];?>" style="max-width:150px;">  
	<input type="file" name="user_photo" value="<?php echo $editdata['user_photo']; ?>" ></td> </tr>
	<br><br>
	<tr>
	<td>Enter your password</td> <br><br>
	
	<td><input type ="text"  name="password" value="<?php echo $editdata['password'];?>" style="width:900px;height:35px;"></td></tr>
<br><br>
	
	<tr>
		<td>Enter your status</td> <br><br>
	<td><input type ="text"  name="status" value="<?php echo $editdata['status'];?>" style="width:900px;height:35px;"> </td></tr>
	<br><br>
	<tr>
	<td>Enter your email</td><br><br>  
	<td><input type ="text"  name="email" value="<?php echo $editdata['email'];?>" style="width:900px;height:35px;"> </td></tr>
	<br><br>
	
	<tr>
	<td>Enter your city</td> <br><br>
	<td><input type ="text"  name="city" value="<?php echo $editdata['city'];?>" style="width:900px;height:35px;"></td></tr>
	<br><br>
	<tr>
	<td>Enter your gender</td> <br><br>
	<td><input type ="text"  name="gender" value="<?php echo $editdata['gender'];?>" style="width:900px;height:35px;"></td></tr>
	<br><br>
	
	<tr>
	
	<td>Enter your date_birth</td> <br><br>
	<td><input type ="text"  name="date_birth" value="<?php echo $editdata['date_birth'];?>" id="datepicker"  style="width:900px;height:35px;" > </td></tr>
	<br><br>
	<tr>
	<td>Enter your contact_no</td><br><br> 
	<td><input type ="text"  name="contact_no" value="<?php echo $editdata['contact_no'];?>" style="width:900px;height:40px;" ></td></tr>
	<br><br>
	<br><br>
     <input type="hidden" name="page" value="admin">
	 <input type="hidden" name="process" value="update">
	<tr ><td></td>
	<input type="submit" name="submit" value="submit" style="width:100px;height:40px;background-color:#3C8DBC;border-radius:5px;">
	</form>
	
 
	</div>
	</div>
	</div>
</body>
</html>
