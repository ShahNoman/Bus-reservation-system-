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

<?php include(MANAGER_PATH.'include/header.php'); ?>
<?php include(MANAGER_PATH.'include/sidbar.php'); ?>

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
	<input type="hidden" name="user_id" value="<?php echo $_SESSION['webapp']['user']['user_id'] ?>">
	<tr>
	<td>Name<br><br>
	</td><td>	<input type="text" name="user_name" value="<?php  echo $editdata['user_name']; ?>" style="width:900px;height:35px;"></td></tr>
	<tr>
	<br><br>
	<td> Full Name</td><br><br>
	<td>	<input type="text" name="user_fullname" value="<?php echo $editdata['user_fullname']; ?>"  style="width:900px;height:35px;"></td></tr>
	<br><br>
	
	<tr>
	<td>User Type</td><br><br>
	<td><input type="text" name="user_type" value="<?php echo $editdata['user_type']; ?>"  style="width:900px;height:35px;"></td></tr>
	<br><br>
	<tr>
	<td> User Photo</td><br><br> 
	<td><img src="image/<?php echo $editdata['user_photo'];?>" style="max-width:150px;">  
	<input type="file" name="user_photo" value="<?php echo $editdata['user_photo']; ?>" ></td> </tr>
	<br><br>
	<tr>
	<td>Password</td> <br><br>
	
	<td><input type ="text"  name="password" value="<?php echo $editdata['password'];?>" style="width:900px;height:35px;"></td></tr>
    <br><br>
	
	<tr>
	<td>Email</td><br><br>  
	<td><input type ="text"  name="email" value="<?php echo $editdata['email'];?>" style="width:900px;height:35px;"> </td></tr>
	<br><br>
	
	<tr>
	<td>City</td> <br><br>
	<td><input type ="text"  name="city" value="<?php echo $editdata['city'];?>" style="width:900px;height:35px;"></td></tr>
	<br><br>
	<tr>
	<td>Gender</td> <br><br>
	<td><input type ="text"  name="gender" value="<?php echo $editdata['gender'];?>" style="width:900px;height:35px;"></td></tr>
	<br><br>
	
	<tr>
	
	<td>Date_birth</td> <br><br>
	<td><input type ="text"  name="date_birth" value="<?php echo $editdata['date_birth'];?>" id="datepicker"  style="width:900px;height:35px;" > </td></tr>
	<br><br>
	<tr>
	<td>Contact No</td><br><br> 
	<td><input type ="text"  name="contact_no" value="<?php echo $editdata['contact_no'];?>" style="width:900px;height:40px;" ></td></tr>
	<br><br>
	<br><br>
     <input type="hidden" name="page" value="staff">
	<input type="hidden" name="process" value="update">
	<tr ><td></td>
	<input type="submit" name="submit" value="submit" style="width:100px;height:40px;background-color:#3C8DBC;border-radius:5px;">
	</form>

	 <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker2" ).datepicker();
  });
  </script>
	</table>
	</div>
	</div>
	</div>
</body>
</html>
