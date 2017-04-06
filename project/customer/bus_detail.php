<?php 
 include('../config.php'); 
 $check = new login;
$check->check_login();
?>	


<?php include(CUSTOMER_PATH.'include/header.php'); ?>
<?php include(CUSTOMER_PATH.'include/sidbar.php'); ?>



<?php 
	$gen = new general; 
	$table_data = $gen->table_data('vehicle_tbl','',"order by vehicle_id asc","");

	
	
	

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

	<h1  style="text-align:center;margin-top:0px;padding-top:50px;"> Bus Detail</h1>
<table style="border-bottom:2px solid #ECF5ED;border-right:2px solid #ECF5ED; width:1100px;margin:0 auto;border-radius:10px;">


<tr>
       <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Bus Id
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Bus Title
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Bus Description
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Bus No	
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Bus Color	
	</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Bus Mileage	
	</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Bus Driver	
	</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Bus Doctor	
	</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Bus Hostess	
	</th>

</tr>
	
	
<?php
	$counter=0;
    foreach($table_data as $each_row){  $counter++ ?>
	
<tr style="border-bottom:4px solid #fff;">
	
		
	
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $counter; ?></td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	
	<?php echo $each_row['vehicle_name'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	   <?php echo $each_row['vehicle_description'] ?> 
	</td>
	
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['vehicle_no'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['vehicle_color'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['vehicle_mileage'] ?> 
	</td>

<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['vehicle_driver'] ?> 
	</td>

<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['vehicle_doctor'] ?> 
	</td>

<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['vehicle_hostess'] ?> 
	</td>

	
	</tr>
	
 <?php  } ?>
	</table>
	</div>
	

</div>
</body>
</html>
