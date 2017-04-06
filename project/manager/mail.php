<?php 
		include('../config.php');
$check = new login;
$check->check_login();
	
?>	
<?php include(MANAGER_PATH.'include/header.php'); ?>
<?php include(MANAGER_PATH.'include/sidbar.php'); ?>


<?php 

$gen = new general; 
         if(isset($_GET['delete']) && $_GET['delete']!="")
	{  
	
		$gen->remove('travel_tbl','travel_id',$_GET['delete']);  
	
	}


	$gen = new general; 
	$confirm_ticket = $gen->table_data("travel_tbl","  left join  vehicle_tbl on  vehicle_tbl.vehicle_id = travel_tbl.vehicle_id left join  route_tbl on  route_tbl.route_id = travel_tbl.route_id  left join  user_tbl on  user_tbl.user_id = travel_tbl.user_id" ,"","");

	?>
		
<?php



 
	
		
	$gen = new general;
	$editdata = $gen->aproved($_GET['travel_id']);  
	

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
	



<div style="width:1100px; background-color:#FFFFFF; height:550px;">
<h1 style="text-align:center;padding-top:40px;">ALL Ticket Details</h1>		
<table style="border-bottom:2px solid #ECF5ED;border-right:2px solid #ECF5ED; width:1100px;margin-left:50px;border-radius:10px;">



<tr style="border-bottom:1px solid #000;">
     <th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Serial No
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Customer Name
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
        From
	</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
       To
	</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
      Bus Name
	</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
         Bus No
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
         Total Ticket
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
        Total Price
	</th>
			<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
        Status
	</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
        Ticket Confirm
	</th>
			<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
        Cancel Tickets
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
	<?php echo  $each_row['user_name']?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	   <?php echo $each_row['route_start'] ?>
	    
	</td>
		<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	  
	    <?php echo $each_row['route_end'] ?> 
	</td>
		
		<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	   <?php echo $each_row['vehicle_name'] ?>
	   

		</td>
				<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	   <?php echo $each_row['vehicle_no'] ?>
	   

		</td>
		<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	   <?php echo $each_row['no_of_tickets'] ?>
	  
	</td>
		</td>
		<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	   <?php echo $each_row['total_price'] ?>
	  
	</td>
		<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	   <?php echo $each_row['ticket_status'] ?>
	  
	</td>

	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
		
		<a href="mail.php?travel_id=<?php echo $each_row['travel_id']; ?>">Confirm</a>
	
		</td>
		
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
		
<a onClick="return confirmation();" href="<?php echo MANAGER_URL.'mail.php?delete='.$each_row['travel_id'] ?>">Cancel</a>	
		</td>
		
	
	</tr>
	
 <?php  } ?>
	</table>
		</div>
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
