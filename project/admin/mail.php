<?php

     
include('../config.php');
$page = 'mail';
$check = new login;
$check->check_login();	
?>


<?php include(ADMIN_PATH.'include/header.php'); ?>
<?php include(ADMIN_PATH.'include/sidbar.php'); ?>




<?php


	$gen = new general; 
	$table_data = $gen->table_data('contact_us_tbl','',"order by contact_us_id asc","");

	
	
         if(isset($_GET['delete']) && $_GET['delete']!="")
	{  
	
		$gen->remove('contact_us_tbl','contact_us_id',$_GET['delete']);  
	
	}
	
		
	?>
	
	
	<htlm>
<head>

<link rel="stylesheet" href="css/style.css">
 
</head>

<body>


<div class="main_body">	
<div class="main_inner">

	
	<style>
table tr td
{
	text-align:center;border-top:2px solid #000;border-left:2px solid #000;background-color:#FFFFFF;}
table tr th
{
     text-align:center;border-top:2px solid #000;border-left:2px solid #000;background-color:#FFFFFF;
}
</style>

	<h1  style=" text-align:center;padding-top:50px;"> Customer Detail </h1>
<table style="border-bottom:2px solid #ECF5ED;border-right:2px solid #ECF5ED; width:1100px;margin:0 auto;border-radius:10px;">


<tr>
       <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		id
	</th>
	  <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Name
	</th>
	  <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Email
	</th>
	  <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Subject
	</th>
	
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">Message</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">Action</th>

	
		
</tr>
	
	
<?php
	$counter=0;
	 foreach($table_data as $each_row) { $counter++ ?>
	
<tr style="border-bottom:1px solid #000;">
	
		
	
		<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $counter; ?>
	</td>
		<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['contact_us_name'] ?> 
	</td>
		
	
		<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['contact_us_email'] ?> 
	</td>
	
	
	
		
	
		<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['contact_us_subject'] ?>
	</td>
	
		<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['contact_us_message'] ?> 
	</td>
	
	
			
	
	
		<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">


		<a onClick="return confirmation();" href="<?php echo ADMIN_URL.'mail.php?delete='.$each_row['contact_us_id'] ?>"><img src="image/delete.png"></a>
		</td>
	
	</tr>
	
 <?php  } ?>
	</table>
	</div>
	</div>

<script>

function confirmation()
{
		
	var r = confirm("Are you sure to delete this record?");
	if (r == true) {
	   return true;
	} else {
	return false;   
	} 

}
</script>	

</body>



</html>
