

<?php

   
include('config.php');
	 

?>
<html>
<head>
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">

<?php include(PATH.'include/header.php') ?>
<?php include(PATH.'include/footer.php') ?>


<!---slider start--->
<div class="slider">


<div class="slideshow">
	    <ul class="slideshow">
		
		
	
		
         <li class="show"><img width="1100" height="250" src="images/noman.jpg" alt="best one" /></li>
        <li  class="show"><img width="1100" height="250" src="images/img.jpg" alt="noman" /></li>
        
	
		
		
		</ul>
		
	 		 
	  </div>
<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</div>
<!---slider end---->

<div class="adminprofile_in">
	<h2 class="heading">REGISTRATION FORM</h2>
					
					
					<h3 style="text-align:center;color:#FF0000;"> <?php
					if(isset($_SESSION['webapp']['message'])){echo $_SESSION['webapp']['message']; unset($_SESSION['webapp']['message']);}
				?></h3>
	
	<table>
	<form action="<?php echo ADMIN_URL; ?>action/general.action.php" method="post" enctype="multipart/form-data">

	<tr>
	<td>Enter name</td><td>	<input type="text" name="user_name" required style="width:250px;height:40px;"></td></tr>
	
	<tr>
	<td>Enter Full name</td>
	<td>	<input type="text" name="user_fullname"required  style="width:250px;height:40px;"></td></tr>
	<tr>
	<td>Select your photo</td> 
	<td> <input type="file" name="user_photo" required style="width:250px;height:40px;"></td> </tr>
	<tr>
	<td>Enter your password</td> 
	<td><input type ="text"  name="password" required style="width:250px;height:40px;"></td></tr>
	<tr>
	<td>Enter user_type</td>
	<td><select name="user_type" required > <option>CUSTOMER</option></select> </td></tr>
	
			
	<tr>
		<td>Enter your status</td> 
	<td><input type ="text"  name="status"required  style="width:250px;height:40px;"> </td></tr>
	<tr>
	<td>Enter your email</td>  
	<td><input type ="text"  name="email" required style="width:250px;height:40px;"> </td></tr>
	
	<tr>	<td>Enter your adress</td> 
	<td><input type ="text"  name="adress" required style="width:250px;height:40px;"></td></tr>
	<tr>
	<td>Enter your city</td> 
	<td><input type ="text"  name="city" required  style="width:250px;height:40px;"></td></tr>
	<tr>
	<td>Enter your gender</td> 
	<td><input type ="radio"  name="gender" required >Male
	<input type ="radio"  name="gender" required >Female</td></tr>
	
	<tr>
	
	<td>Enter your date_birth</td> 
	<td><select  name="date_birth" required>
	                                    
										<option>01</option>
										<option>02</option>
										<option>03</option>
										<option>04</option>
										<option>05</option>
										<option>06</option>
										<option>07</option>
										<option>08</option>
										<option>09</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
										
										</select>
										
	<select  name="date_birth" required>
	                                    
										<option>01</option>
										<option>02</option>
										<option>03</option>
										<option>04</option>
										<option>05</option>
										<option>06</option>
										<option>07</option>
										<option>08</option>
										<option>09</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>										
										</select>
										
	<select  name="date_birth" required>
	                                    
										<option>1990</option>
										<option>1991</option>
										<option>1992</option>
										<option>1993</option>
										<option>1994</option>
										<option>1995</option>
										<option>1996</option>
										<option>1997</option>
										<option>1998</option>
										<option>1999</option>
										<option>2000</option>
										<option>2001</option>										</select>
										
										
										
										
										
										
										
										
										
										
										
										
										</td>
	</tr>
	<tr>
	<td>Enter your contact_no</td> 
	<td><input type ="text"  name="contact_no" required style="width:250px;height:40px;" ></td></tr>
	<tr>
	<td>Enter your cnic_no</td> 
	<td><input type ="text"  name="cnic_no" required style="width:250px;height:40px;" > </td></tr>
     <input type="hidden" name="page" value="register">
	<tr ><td></td>
	<td><input type="submit" name="submit" value="submit"style="width:250px;height:40px;"></td></tr>
	</form>
	
	</table>
	</div>

</body>

</html>
