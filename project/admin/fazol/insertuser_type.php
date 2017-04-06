<?php

     mysql_connect("localhost","root","");
	 mysql_select_db("bus reservation");

?>






<html> 
	<body>
		
	
	</body>
</html>




<?php
	
	
	if(isset($_POST['submit'])){
	
	$time = strtotime(date("y-m-d H:i:s"));
	$path = $_SERVER['DOCUMENT_ROOT'].'/project/admin/' ;
	$filename= $time.$_FILES["user_photo"]["name"];


	move_uploaded_file($_FILES["user_photo"]["tmp_name"] ,$path ."image/" .$filename );
			
			
			
	$query=mysql_query("insert into user_tbl
	set
    
	user_name = '".$_POST['user_name']."' ,
	password = '".$_POST['password']."' ,
	user_type = '".$_POST['user_type']."' ,
	created_date = '".$_POST['created_date']."' ,
	last_access_date = '".$_POST['last_access_date']."',
	status = '".$_POST['status']."' ,
	user_fullname = '".$_POST['user_fullname']."' ,
	user_photo = '".$filename."',
	adress = '".$_POST['adress']."' ,
	city = '".$_POST['city']."' ,
	gender = '".$_POST['gender']."' ,
	date_birth = '".$_POST['date_birth']."' ,
	contact_no = '".$_POST['contact_no']."' ,
	cnic_no = '".$_POST['cnic_no']."' ,
	email = '".$_POST['email']."' 
	
	
	
	
	
	 ");
	
	if($query){

		
			echo	"user register";
			
		}
		else
		{
			echo "check some error";
			
		}
		}
		
		?>
		
		