<?php

include('../config.php');

$check = new login;
$check->check_login();
$page = 'configuration';	
?>


<?php include(ADMIN_PATH.'include/header.php'); ?>
<?php include(ADMIN_PATH.'include/sidbar.php'); ?>

<?php 
	$gen = new general; 
	$editdata = $gen->editdata('config_site_tbl','config_id','1');

	


	?>
	
	
	
	
	

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


<form action="<?php echo ADMIN_URL; ?>action/general.action.php" method="post"	enctype="multipart/form-data">
	
Config Title<br><br>
<input type="text" name="config_title"  value= "<?php echo $editdata ['config_title'];  ?>" required style="width:900px;height:35px;"><br><br>
 	
Site logo<br><br>


     <img src="<?php echo ADMIN_URL.'image/logo.png';  ?>" style="max-height:120px;max-width:120px;">
	 <input type="file" name="config_image"   required style="width:900px;height:35px;"><br><br>




                  
			
							
						
<br><br>


Site Name	<br><br>
<input type="text" name="config_name" value="<?php echo $editdata ['config_name'];  ?>" required  style="width:900px;height:35px;"><br><br>


About	<br><br>
<input type="text" name="config_about" value="<?php echo $editdata ['config_about'];  ?>" required  style="width:900px;height:35px;"><br><br>



						
							<input type="hidden" name="edit" value="<?php echo '1'; ?>">
							<input type="hidden" name="process" value="update">


						<input type="hidden" name="page" value="configuration">






<input type="submit" name="submit" value="submit" style="width:100px;height:40px;background-color:#3C8DBC;border-radius:5px;">
</form>
 </div>

	</div>
	</div>
</body>
</html>
