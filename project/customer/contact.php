<?php 
		include('../config.php');
		$check = new login;
$check->check_login();

	
?>	
<?php include(CUSTOMER_PATH.'include/header.php'); ?>
<?php include(CUSTOMER_PATH.'include/sidbar.php'); ?>


	
	
	
	


<htlm>
<head>

<link rel="stylesheet" href="css/style.css">
 
</head>

<body>


<div class="main_body">	
<div class="main_inner">



<div class="form_insert">
<h1>Message</h1>

					<h3 style="text-align:center;color:#FF0000;"> <?php
					if(isset($_SESSION['webapp']['message'])){echo $_SESSION['webapp']['message']; unset($_SESSION['webapp']['message']);}
				?></h3>



<form action="<?php echo ADMIN_URL; ?>action/general.action.php" method="post"	>
	
Name<br><br>
<input type="text" name="contact_us_name"    required style="width:300px;height:50px;"><br><br>


Subject<br><br>
<input type="text" name="contact_us_subject"  required style="width:300px;height:50px;"><br><br>

Email	<br><br>
<input type="text" name="contact_us_email"    required style="width:300px;height:50px;"><br><br>


Message	<br><br>
<input type="text" name="contact_us_message"   required  style="width:500px;height:200px;"><br><br>



						 
                         <input type="hidden" name="process" value="insert">
                        

                         
						<input type="hidden" name="page" value="contact">



<input type="submit" name="submit" value="send" style="width:100px;height:40px;background-color:#3C8DBC;border-radius:5px;">
</form>
 


</div>


</div>
</div>

</body>
</html>
