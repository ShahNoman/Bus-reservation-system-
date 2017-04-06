<?php
     
include('../config.php');
$page = 'travel';
$check = new login;
$check->check_login();	
?>


<?php include(ADMIN_PATH.'include/header.php'); ?>
<?php include(ADMIN_PATH.'include/sidbar.php'); ?>



	
<?php 
	$gen = new general; 
	$table_data = $gen->table_data("travel_tbl","  left join  vehicle_tbl on  vehicle_tbl.vehicle_id = travel_tbl.vehicle_id left join  route_tbl on     route_tbl.route_id = travel_tbl.route_id  left join  user_tbl on  user_tbl.user_id = travel_tbl.user_id" ,"","");

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
	


	<h1  style=" text-align:center;padding-top:50px;"> Ticket Reports </h1>
	
<table style="border-bottom:2px solid #ECF5ED;border-right:2px solid #ECF5ED; width:1100px;margin:0 auto;border-radius:10px;">



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
        Ticket Confirmed
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
	<?php echo $each_row['user_name']  ?> 
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
	</tr>
	
 <?php  } ?>
	</table>
		</div>
	</div>




</body>
</html>



<script>
function update_price_amount(no_of_tickets)
{
	var ticket_price = document.getElementById('priceField').value;

	if((no_of_tickets/1)>=5)
	{
		ticket_price = ticket_price * 0.90;
	}
	var total_price = no_of_tickets * ticket_price;


	document.getElementById('total_price').value = total_price;
}

function update_price_ticket(ticket_price)
{
	var no_of_tickets = document.getElementById('no_of_tickets').value;

	if((no_of_tickets/1)>=5)
	{
		ticket_price = ticket_price * 0.90;
	}
	var total_price = no_of_tickets * ticket_price;


	document.getElementById('total_price').value = total_price;
}

</script>


