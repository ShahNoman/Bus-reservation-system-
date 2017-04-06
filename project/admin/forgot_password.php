<?php
include('../config.php');
?>
	
	
	
<html
	
	
	
	
	
	<body style="background-image:url(../../index/stock-photo-bus-car-headlight-176895764.jpg)">
<!-- Header start -->



	<div style="width:100%;height:450px; margin:0 auto;padding-top:110px;">
<div style="width:350px;height:400px; margin:0 auto;padding-top:50px;background-color:#fdfdfd;border-radius:5px;">
<h1 style="padding-top:40px;text-align:center; color:#747780;">Forgot</h1>
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

 <form action="<?php echo ADMIN_URL; ?>action/forgot.action.php" method="post"  style="text-align:center;">
  
  
  
  
    <input type="text" name="email" placeholder="email" required style="width:300px;height:50px;  border-radius:3px; background-color:
  #ecf0f1; border:solid #ecf0f1 1px; color:#5f6467; text-align:center;"><br><br>
  
 <input type="submit" name="submit" value="Recover" style="width:300px;height:50px;  border-radius:3px; background-color:
  #3598dc; border:solid #3598dc 1px; color:#d4f9ff; text-align:center;"><br><br>
</form>

</div>
</div>

	
</body>

</html>
