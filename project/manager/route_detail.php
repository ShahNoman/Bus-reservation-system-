<?php 
	include('../config.php');
$check = new login;
$check->check_login();
	
?>	
<?php include(MANAGER_PATH.'include/header.php'); ?>
<?php include(MANAGER_PATH.'include/sidbar.php'); ?>




<?php 
	$gen = new general; 
	$table_data = $gen->table_data('route_tbl','',"order by route_id asc","");

	
	
	
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

	<h1  style="text-align:center;margin-top:0px;padding-top:50px;"> Route Detail </h1>
<table style="border-bottom:2px solid #ECF5ED;border-right:2px solid #ECF5ED; width:1100px;margin:0 auto;border-radius:10px;">


<tr>
       <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Route id
	</th>
	 <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Route Name
	</th>
 <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		  Route Description
	</th>
	 <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Route Map	
	</th>
	 <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Route Start	
	</th>
		 <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Route End	
	</th>
		 <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Route Distance	
	</th>
		 <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Dept Time	
	</th>
		

</tr>
	
	
<?php
	$counter=0;
    foreach($table_data as $each_row){  $counter++ ?>
	
<tr style="border-bottom:1px solid #000;">
	
		
	
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $counter; ?>
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['route_name'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	   <?php echo $each_row['route_description'] ?> 
	</td>
	
		
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<img src="<?php echo ADMIN_URL;?>image/<?php echo $each_row['route_map']; ?>" style="max-width:150px;">
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['route_start'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['route_end'] ?> 
	</td>

<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['route_distance'] ?> 
	</td>

<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['dept_time'] ?> 
	</td>
	
	</tr>
	
 <?php  } ?>
	</table>
		

</div>
</div>
</body>
</html>
