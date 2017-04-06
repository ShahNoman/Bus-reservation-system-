<?php

     
include('../config.php');
$page = 'route_detail';	
$check = new login;
$check->check_login();
?>


<?php include(ADMIN_PATH.'include/header.php'); ?>
<?php include(ADMIN_PATH.'include/sidbar.php'); ?>

<?php 
	$gen = new general; 
	$table_data = $gen->table_data('route_tbl','',"order by route_id asc","");

	
	
	
	if(isset($_GET['edit']) && $_GET['edit']!="")
	{	$editdata = $gen->editdata('route_tbl','route_id',$_GET['edit']);  }

	?>
	
	
	
	
	<?php if(isset($_GET['delete']) && $_GET['delete']!="")
	{  
	
		$gen->remove('route_tbl','route_id',$_GET['delete']);  
	
	}?>
	

<htlm>
<head>

<link rel="stylesheet" href="css/style.css">
 
</head>

<body>


<div class="main_body">	
<div class="main_inner">



<div class="form_insert">
<h1>Add/Update</h1>

<h3 style="text-align:center;color:#FF0000;"> <?php
					if(isset($_SESSION['webapp']['message'])){echo $_SESSION['webapp']['message']; unset($_SESSION['webapp']['message']);}
				?></h3>		
<?php
$gen = new general; 
	$bus = $gen->table_data('vehicle_tbl','',"order by vehicle_id asc","");
?>

<form action="<?php echo ADMIN_URL; ?>action/general.action.php" method="post"	enctype="multipart/form-data">
	
Route Name<br><br>
<input type="text" name="route_name"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['route_name']; } ?>" required style="width:900px;height:35px;"><br><br>

Bus Name<br><br>

	<select name="vehicle_id" required  style="width:900px;height:35px;" >
	<?php foreach($bus as $row){?>
	 <option value="<?php echo $row['vehicle_id']?>"><?php echo $row['vehicle_name']?></option>
	<?php }?>
	 
	 </select> 
<br><br>	
Route Description<br><br>
<input type="text" name="route_description"  value="<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['route_description']; } ?>" required style="width:900px;height:35px;"><br><br>




                  
						<?php if(isset($_GET['edit']) && $_GET['edit']!=""){?>
							<img src="<?php echo ADMIN_URL.'image/'.$editdata['route_map'];  ?>" style="max-height:120px;max-width:120px;">
						<?php } ?>



Route Map<br><br>
<input type="file" name="route_map"  required style="width:300px;height:50px;"	><br><br>



Route Start	<br><br>
<input type="text" name="route_start" value="<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['route_start']; } ?>" required  style="width:900px;height:35px;"><br><br>


Route End	<br><br>
<input type="text" name="route_end" value="<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['route_end']; } ?>" required  style="width:900px;height:35px;"><br><br>


Route Distance	<br><br>
<input type="text" name="route_distance"  value="<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['route_distance']; } ?>" required  style="width:900px;height:35px;"><br><br>


Dept Time	<br><br>
<input type="text" name="dept_time"  value="<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['dept_time']; } ?>" required  style="width:900px;height:35px;"><br><br>

Ticket Price	<br><br>
<input type="text" name="ticket_price"  value="<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['ticket_price']; } ?>" required  style="width:900px;height:35px;"><br><br>




	<?php if(isset($_GET['edit']) && $_GET['edit']!="")
						{ ?>
							<input type="hidden" name="edit" value="<?php echo $_GET['edit']; ?>">
							<input type="hidden" name="process" value="update">

	<?php }elseif(isset($_GET['delete']) && $_GET['delete']!=""){ ?>
						  <input type="hidden" name="process" value="delete">
						  
						  <?php }else { ?>
                         <input type="hidden" name="process" value="insert">
                         <?php } ?>

                         
						<input type="hidden" name="page" value="route_detail">






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
			<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Ticket Price	
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Action	
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
	<img src="image/<?php echo $each_row['route_map']; ?>" style="max-width:150px;">
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
	
<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['ticket_price'] ?> 
	</td>



	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
		
		
		 <a href="<?php echo ADMIN_URL.'route_detail.php?edit='.$each_row['route_id'] ?>"><img src="image/edit.png"></a>
		
		<a onClick="return confirmation();" href="<?php echo ADMIN_URL.'route_detail.php?delete='.$each_row['route_id'] ?>"><img src="image/delete.png"></a>

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
