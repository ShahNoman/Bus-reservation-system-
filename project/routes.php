

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


<?php 
	$gen = new general; 
	$table_data_route = $gen->table_data('route_tbl',$where,"order by route_id asc","");
	?>
	

<?php
if(isset($_GET['search']) && ($_GET['search']!=''))
{
	$where = "where route_start like '%".$_GET['search']."%' OR route_end like '%".$_GET['search']."%' ";
}

	?>
	
<?php 
	$gen = new general; 
	$table_data_route = $gen->table_data('route_tbl',$where,"order by route_id asc","");
	?>
<!---slider start--->

<div style="width:550px; float:right;">
	<form>
					<input type="text" name="search" value="<?php echo $_GET['search']; ?>" placeholder="Search..." style="width:400px;height:40px;font-size:1.4em;	margin-top:10px;border:2px solid #ccc;">
					<input type="submit" value="Search"  style="width:80px;background-color:#FF7500; height:40px; margin-top:-1px;">
					</form>
</div>
<style>
table tr td
{
	text-align:center;border-top:2px solid #000;border-left:2px solid #000;background-color:#FFFFFF;}
table tr th
{
     text-align:center;border-top:2px solid #000;border-left:2px solid #000;background-color:#FFFFFF;
}
</style>


<div class="rout_div">
<div class="route_detail_inner">
<h3 style="font-family:Arial, Helvetica, sans-serif;padding-top:20px; padding-left:15px;">Top Routes Buses</h3>


<div style="width:1100px; height:auto; margin:0 auto;">







<table style="border-bottom:2px solid #ECF5ED;border-right:2px solid #ECF5ED; width:1100px;margin:0 auto;border-radius:10px;">


<tr>
       
	 <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		FROM	
	</th>
	 <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		TO	
	</th>
		 <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
	 Distance	
	</th>
		 <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Dept Time	
	</th>
			 <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Ticket Booking	
	</th>	

</tr>
	
<?php
	
    foreach($table_data_route as $each_row){ ?>
	
	
<tr style="border-bottom:4px solid #fff;">
	
		

	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['route_start'] ?>
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php	echo $each_row['route_end'] ?>
	</td>

<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['route_distance'] ?>
	</td>

<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['dept_time'] ?>
	</td>

	
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
		
		<div class="book">
		 <a href="#">Book</a>
		</div>
		

		</td>
	</tr>
	<?php  } ?>
 
	</table>

</div>
</div>



</div>



<?php include(PATH.'include/footer.php'); ?>
</div>
</body>

</html>
