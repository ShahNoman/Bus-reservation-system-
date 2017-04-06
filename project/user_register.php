

<?php

   
include('config.php');
	 
$db = new general;
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">

<?php include(PATH.'include/header.php') ?>
<script>
function City()	
{
  var City=/^[a-zA-Z]{4,15}$/;
   if(document.f1.t5.value.search(City)==-1)
    {
	 alert("enter correct City");
	 document.f1.t5.focus();
	 return false;
	 }
	}
function name()	
{
  var name=/^[a-zA-Z]{4,15}$/;
   if(document.f1.t1.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.t1.focus();
	 return false;
	 }
	} 
	function fullname()	
{
  var fullname=/^[a-zA-Z]{4,15}$/;
   if(document.f1.t4.value.search(fullname)==-1)
    {
	 alert("enter correct fullname");
	 document.f1.t4.focus();
	 return false;
	 }
	} 
		 function phone()
{
  var phone=/^[0-9]{10,15}$/;
   if(document.f1.t2.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.t2.focus();
	 return false;
	 }
	} 
	function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.f1.t3.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.t3.focus();
	 return false;
	 }
	} 
		

	
	
function vali()
{

	var name=/^[a-zA-Z]{4,15}$/;
	var fullname=/^[a-zA-Z]{4,15}$/;
	var City=/^[a-zA-Z]{4,15}$/;
	var phone=/^[0-9]{10,15}$/;
	 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
	 var subj=/^[a-zA_Z0-9]{5,100}$/;
	 var mesg=/^[a-zA_Z0-9]{10,300}$/;
   if(document.f1.t1.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.t1.focus();
	 return false;
	 }
	else if (document.f1.t5.value.search(City)==-1)
    {
	 alert("enter correct City");
	 document.f1.t5.focus();
	 return false;
	 }
	 	else if (document.f1.t4.value.search(fullname)==-1)
    {
	 alert("enter correct fullname");
	 document.f1.t4.focus();
	 return false;
	 }
	 
 
  else if(document.f1.t2.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.t2.focus();
	 return false;
	 }
	 


   else if(document.f1.t3.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.t3.focus();
	 return false;
	 }
	 
	 else
	 {
	 return true;
	 }
	}
</script>



<!---slider start--->

<!---slider end---->

<div style="width:1100px;height:auto;border:1px solid; background-color:#B0D3EF;">
	<h2 style="margin-left:150px;color:#3E3936;">Register</h2>
					
		<div style="width:600px;height:auto; margin:0 auto;">			
					<h3 style="text-align:center;color:#FF0000;"> <?php
					if(isset($_SESSION['webapp']['message'])){echo $_SESSION['webapp']['message']; unset($_SESSION['webapp']['message']);}
				?></h3>
	
	
	
	
	
	
	
	
	
	<table>
	<form action="<?php echo ADMIN_URL; ?>action/general.action.php" method="post" name="f1" onSubmit="return vali()" enctype="multipart/form-data">

	<tr style="height:60px;">
	<td>Name*</td><td>	<input type="text" name="user_name" id="t1" onChange="return name()" required style="width:200px;height:25px;"></td> </tr>
	
	<tr style="height:60px;">
	<td>Full Name*</td>
	<td>	<input type="text" name="user_fullname"required id="t4" onChange="return fullname()" style="width:200px;height:25px;"></td></tr>
		<tr style="height:60px;">
	<td>Password*</td> 
	<td><input type ="password"  name="password" required style="width:200px;height:25px;"></td></tr>

	<tr style="height:60px;">
	<td>Email*</td>  
	<td><input type ="email"  name="email" required  id="t3" onChange="return email()" style="width:200px;height:25px;"> </td> </tr>
	
	<tr style="height:60px;">	<td>Contact No*</td> 
	<td><input type ="text"  name="contact_no" required id="t2" onChange="return phone()" style="width:200px;height:25px;"></td></tr>
	<tr>
	<td style="height:60px;">City*</td> 
	<td><input type ="text"  name="city" required id="t5" onChange="return City()" style="width:200px;height:25px;"></td></tr>
	<tr>
	
	<td style="height:60px;">Gender*</td> 
	<td>  <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male</td></tr>
	
	
	
	<tr style="height:60px;">
	<td>Upload photo*</td> 
	<td> <input type="file" name="user_photo" required style="width:200px;height:25px;"></td> </tr>

     <input type="hidden" name="page" value="register">
	<tr style="height:60px;"><td></td>
	<td><input type="submit" name="submit" value="Register" style="height:35px;border-radius:5px; "></td></tr>
	</form>
	</table>
	</div>
</div>
<?php include(PATH.'include/footer.php') ?>
</div>
</body>

</html>
