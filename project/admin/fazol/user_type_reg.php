<?php

     mysql_connect("localhost","root","");
	 mysql_select_db("bus reservation");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>


<link rel="stylesheet" href="css/adminstyles.css">
</head>


	 		  

<body>


<div class="container">
<?php
include('adminheader.php')
?>
<div class="form">
<div class="formhiding">User Registration</div>




<div style="width:400px;height:300px;margin:0 auto;padding-top:30px;
text-color:#ffffff;">
<form action="insertuser_type.php" method="post" enctype="multipart/form-data">

	<input type="text" name="user_name" placeholder="Name" style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"><br><br>
	
	
    <input type="text" name="user_fullname" placeholder="Full Name" style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"> <br><br>
   
  
    <input type="radio" name="user_type">Customer
	<input type="radio" name="user_type">Admin
	<input type="radio" name="user_type">Manager
	<input type="radio" name="user_type">Staff<br><br>
	

    <input type="text" name="password" placeholder="Password" style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"> <br><br>
	

    <input type="text" name="created_date" placeholder="Created date" style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"> <br><br>
	

    <input type="text" name="last_access_date" placeholder="Last access date" style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"> <br><br>
	

    <input type="text" name="status" placeholder="Status" style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"> <br><br>
	

    <input type="file" name="user_photo" placeholder="User photo" style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"> <br><br>
	
   
 
   <input type="text" name="email"placeholder="noman@ruqee.com"  style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"><br><br>
  
  <input type="text" name="adress"placeholder="adress"  style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"><br><br>
  
  <input type="text" name="city"placeholder="city"  style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"><br><br>
  
  <input type="text" name="gender"placeholder="gender"  style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"><br><br>
  
  <input type="text" name="date_birth"placeholder="date_birth"  style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"><br><br>
  
  <input type="text" name="contact_no"placeholder="contact_no"  style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"><br><br>
  
  <input type="text" name="cnic_no"placeholder="cnic_no"  style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;"><br><br>
  
  
   
   <br>
   <input type="submit" name="submit" value="Register"placeholder="Register" style="width:300px;height:30px;  border-radius:10px; background-color:
  #0c7daf; border:solid #0c7daf 1px; color:#ffffff; text-align:center;">

</form>

</div>
</div>
</div>
</body>
</html>
