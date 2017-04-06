<?php 
		include('../config.php');

	
?>	
<?php include(MANAGER_PATH.'include/header.php'); ?>
<?php include(MANAGER_PATH.'include/sidbar.php'); ?>


<?php 
	$gen = new general; 
	$confirm_ticket = $gen->table_data('travel_tbl',' left join  user_tbl on  user_tbl.user_id = travel_tbl.user_id   left join  ticket_tbl on  ticket_tbl.ticket_id = travel_tbl.ticket_id  left join  journey_tbl on  journey_tbl.journey_id = travel_tbl.journey_id' ,"order by travel_id desc","");

	
	?>
<?php



	
	if(isset($_GET['id']) && $_GET['id']!="")
	{	
	$gen = new general;
	$editdata = $gen->update('travel_tbl','travel_id',$_GET['id']);  }
	

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
	



	
<table style="border-bottom:2px solid #ECF5ED;border-right:2px solid #ECF5ED; width:1100px;margin:0 auto;border-radius:10px;">



<tr style="border-bottom:1px solid #000;">
     <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		travel Id
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Customer Name
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
        Ticket title
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Ticket Price
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
	journey id
	</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
	Bus NO
	</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
	Route start
	</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
	Route End
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Action	
	</th>

</tr>
	
	
<?php
	$counter=0;
    foreach($confirm_ticket as $each_row){  $counter++ ?>
	
	
<tr style="border-bottom:1px solid #000;">
	
		
	
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $counter; ?>
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['user_name'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	   <?php echo $each_row['ticket_title'] ?> 
	</td>
	
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['ticket_title'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['vehicle_id'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['vehicle_no'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['route_id'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['route_end'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
		
		<a href="mail.php?id=<?php echo $each_row['travel_id']; ?>">Confirm</a>
		
		

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
