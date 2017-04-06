<?php
     
include('../config.php');
$check = new login;
$check->check_login();
	
?>


<?php  include(CUSTOMER_PATH.'include/header.php'); ?>
<?php  include(CUSTOMER_PATH.'include/sidbar.php'); ?>



<?php
$gen = new general; 
	$route = $gen->table_data('route_tbl','',"order by route_id asc","");
?>


<?php
$gen = new general; 
	$bus = $gen->table_data('vehicle_tbl','',"order by vehicle_id asc","");
?>
	
<?php 
	$gen = new general; 
	$table_data = $gen->table_data("travel_tbl","  left join  vehicle_tbl on  vehicle_tbl.vehicle_id = travel_tbl.vehicle_id left join  route_tbl on     route_tbl.route_id = travel_tbl.route_id  where user_id =".$_SESSION['webapp']['user']['user_id'],"","");

	?>	
	

	
<htlm>
<head>

<link rel="stylesheet" href="css/style.css">
 
 <script>	
  var routeArray = new Array();
 <?php foreach($route as $row){?>
 
 			routeArray[<?php echo $row['route_id']?>] =  <?php echo $row['ticket_price']?>; 
 <?php } ?>
 
 
 
 function setPriceValue(routeId){
 
 		//alert(routeArray[routeId])
		document.getElementById('priceField').value = routeArray[routeId]
 }
 </script>
</head>

<body>


<div class="main_body">	
<div class="main_inner">



<div class="form_insert">
<h1>Book Now</h1>

<h3 style="text-align:center;color:#FF0000;"> <?php
					if(isset($_SESSION['webapp']['message'])){echo $_SESSION['webapp']['message']; unset($_SESSION['webapp']['message']);}
				?></h3>		

<form action="<?php echo ADMIN_URL; ?>action/general.action.php" method="post"	enctype="multipart/form-data">
	
Customer Name<br><br>
<input type="hidden" name="user_id"  value= "<?php echo $_SESSION['webapp']['user']['user_id'] ?>"  >
<input type="text" name="user_name"  value= "<?php echo $_SESSION['webapp']['user']['username'] ?>" readonly  style="width:900px;height:35px;">
 <br><br>


Route Name	<br><br>
<select name="route_id" required  style="width:900px;height:35px;" onChange="setPriceValue(this.value)" >
	<?php foreach($route as $row){?>
	 <option value="<?php echo $row['route_id']?>"><?php echo $row['route_name']?></option>
	<?php }?>
	 
	 </select> <br><br>
	 
Bus Name	<br><br>
<select name="vehicle_id" required  style="width:900px;height:35px;" >
	<?php foreach($bus as $row){?>
	 <option value="<?php echo $row['vehicle_id']?>"><?php echo $row['vehicle_name']?></option>
	<?php }?>
	 
	 </select> <br><br>	 



Ticket Price	<br><br>
<input type="text" id="priceField"   name="ticket_prices"  required  style="width:900px;height:35px;" readonly onChange="update_price_ticket(this.value)" >
	 <br><br>


No. of Tickets <br><br>
	<input type="text" name="no_of_tickets"  id="no_of_tickets"  value= "0" onKeyUp="update_price_amount(this.value);" style="width:900px;height:35px;">
 <br><br>

Total Price <br><br>
	<input type="text" name="total_price" id="total_price" readonly value= "0" style="width:900px;height:35px;">
 <br><br>

	 
	 
	 </select> <br><br>


 <br><br>

                         <input type="hidden" name="process" value="insert">
                        

                         
						<input type="hidden" name="page" value="customer_travel">






<input type="submit" name="submit" value="submit" style="width:100px;height:40px;background-color:#3C8DBC;border-radius:5px;">
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
	<?php echo $_SESSION['webapp']['user']['username'] ?> 
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


