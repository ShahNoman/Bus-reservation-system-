
<?php
include('../config.php');
?>
<html>
<head>
	
</head>
<body style="background-image:url(image/1471196054stock-photo-bus-car-headlight-176895764.jpg)">
<!-- Header start -->



	<div style="width:100%;height:450px; margin:0 auto;padding-top:110px;">
<div style="width:350px;height:400px; margin:0 auto;padding-bottom:50px;background-color:#fdfdfd;border-radius:5px;">
<h1 style="padding-top:40px;text-align:center; color:#747780;">Login</h1>
				<h3 style="text-align:center;color:#FF0000;">
				<?php
					if($_SESSION['webapp']['error_msg']!='')
					{
						echo $_SESSION['webapp']['error_msg'];
						echo "<br>";
						unset($_SESSION['webapp']['error_msg']);
					}
				?>
				
				</h3>

 <form action="<?php echo ADMIN_URL; ?>action/login.action.php" method="post" enctype="multipart/form-data" style="text-align:center;">
  
  
  
  
    <input type="text" name="user_name" placeholder="username" required style="width:300px;height:50px;  border-radius:3px; background-color:
  #ecf0f1; border:solid #ecf0f1 1px; color:#5f6467; text-align:center;"><br><br>
  
  <input type="password" name="password" placeholder="password"  required style="width:300px;height:50px;  border-radius:3px; background-color:
  #ecf0f1; border:solid #ecf0f1 1px; color:#86bed7; text-align:center;"><br><br>
 
                               <label>
									<input name="remember" type="checkbox" value="Remember Me" style="margin-left:-150px;">Remember Me
								</label><br><br>
                             <a href="forgot_password.php" style="color:#FF0000;text-decoration:none;"><h4 style="margin-top:-12px; margin-left:-150px;">Forgot Password</h4></a>
 <input type="submit" name="submit" value="Login" style="width:300px;height:50px;  border-radius:3px; background-color:
  #3598dc; border:solid #3598dc 1px; color:#d4f9ff; text-align:center;"><br><br>
 <a href="<?php echo URL; ?>user_register.php" style="color:#FF0000;text-decoration:none;">New User Register</a>
</form>

</div>
</div>


	<!-- Header end -->

