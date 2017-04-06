<?php 
 include('../config.php'); 

	
?>	


<?php include(ADMIN_PATH.'include/header.php'); ?>



<?php 
	$gen = new general; 
	$table_data = $gen->table_data('vehicle_tbl','',"order by vehicle_id asc","");

	
	
	
	if(isset($_GET['edit']) && $_GET['edit']!="")
	{	$editdata = $gen->editdata('vehicle_tbl','vehicle_id',$_GET['edit']);  }
	?>




	<?php if(isset($_GET['delete']) && $_GET['delete']!="")
	{  
	
		$gen->remove('vehicle_tbl','vehicle_id',$_GET['delete']);  
	
	}?>




<htlm>
<link rel="stylesheet" href="css/adminstyles.css">
<link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="jquery-ui.css">
<script src="jquery-1.10.2.js"></script>
  <script src="jquery-ui.js"></script>



<body style="background:#ebeeeb;">


<div style="width:100%;height:1450px;background-color:#ebeeeb;">	
<div style="width:800px;height:1400px;background-color:white;border:solid 1px;padding:0 auto;margin:0 auto;">
<div style="width:750px;height:1350px;background-color:#f4f4f4;border:solid 1px;padding:0 auto;margin:20px auto;">
<h1 style="text-align:center;">Bus detail Form</h1>

					<h3 style="text-align:center;color:#FF0000;"> <?php
					if(isset($_SESSION['webapp']['message'])){echo $_SESSION['webapp']['message']; unset($_SESSION['webapp']['message']);}
				?></h3>
<div style="width:450px;height:1040px;margin:0 auto; padding-top:10px;">

<form action="bus_detail.php" method="post" enctype="multipart/form-data"	>
	
     Bus Name <br>
    <input type="text" name="vehicle_name"   value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_name']; } ?>"       required style="width:300px;height:40px;"><br><br>


Bus Description<br>
<input type="text" name="vehicle_description"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_description']; } ?>" required style="width:300px;height:40px;"><br><br>


Bus No<br>
<input type="text" name="vehicle_no"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_no']; } ?>" required style="width:300px;height:40px;"><br><br>

Bus Color	<br>
<input type="text" name="vehicle_color" value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_color']; } ?>" required  style="width:300px;height:40px;"><br><br>

Bus Mileage	<br>
<input type="text" name="vehicle_mileage"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_mileage']; } ?>" required  style="width:300px;height:40px;"><br><br>


Bus Driver	<br>
<input type="text" name="vehicle_driver"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_driver']; } ?>" required  style="width:300px;height:40px;"><br><br>


Bus Doctor	<br>
<input type="text" name="vehicle_doctor"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_doctor']; } ?>" required  style="width:300px;height:40px;"><br><br>

Bus Hostess	<br>
<input type="text" name="vehicle_hostess"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_hostess']; } ?>" required  style="width:300px;height:40px;"><br><br>

Route Name<br>
<input type="text" name="route_name"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['route_name']; } ?>" required style="width:300px;height:40px;"><br><br>

Route Description<br>
<input type="text" name="route_description"  value="<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['route_description']; } ?>" required style="width:300px;height:40px;"><br><br>




                  
						<?php if(isset($_GET['edit']) && $_GET['edit']!=""){?>
							<img src="<?php echo ADMIN_URL.'image/'.$editdata['route_map'];  ?>" style="max-height:120px;max-width:120px;">
						<?php } ?>



Route Map<br>
<input type="file" name="route_map"  required style="width:300px;height:50px;"><br><br>



Route Start	<br>
<input type="text" name="route_start" value="<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['route_start']; } ?>" required  style="width:300px;height:40px;"><br><br>


Route End	<br>
<input type="text" name="route_end" value="<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['route_end']; } ?>" required  style="width:300px;height:40px;"><br><br>


Route Distance	<br>
<input type="text" name="route_distance"  value="<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['route_distance']; } ?>" required  style="width:300px;height:40px;"><br><br>


Route Avg Time	<br>
<input type="text" name="route_avg_time"  value="<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['route_avg_time']; } ?>" required  style="width:300px;height:40px;"><br><br>









						<?php if(isset($_GET['edit']) && $_GET['edit']!="")
						{ ?>
							<input type="hidden" name="edit" value="<?php echo $_GET['edit']; ?>">
							<input type="hidden" name="process" value="update">

						 <?php }elseif(isset($_GET['delete']) && $_GET['delete']!=""){ ?>
						  <input type="hidden" name="process" value="delete">
						  
						  <?php }?>

                         
						<input type="hidden" name="page" value="bus_detail">









<input type="submit" name="submit" value="submit" style="width:300px;height:40px;">
</form>
 
</div>

</div>
</div>
</div>

	<?php
		

	 
	if(isset($_POST['submit'])){
		
	$query="insert into vehicle_tbl
	set 
	vehicle_name 		= '".$_POST['vehicle_name']."' ,
	vehicle_description 		= '".$_POST['vehicle_description']."' , 
	vehicle_no	 		= '".$_POST['vehicle_no']."', 
	vehicle_color 		= '".$_POST['vehicle_color']."' ,
	vehicle_mileage 		= '".$_POST['vehicle_mileage']."' ,
	vehicle_driver 		= '".$_POST['vehicle_driver']."' ,
	vehicle_doctor 		= '".$_POST['vehicle_doctor']."' ,
	vehicle_hostess 		= '".$_POST['vehicle_hostess']."'  ";
	
	
	if(mysql_query($query))
	{
		$vehicle_id 	= mysql_insert_id();
		
			mysql_query("insert into route_tbl
			set 
			vehicle_id 		= '".$vehicle_id."' ,
			route_name 	= '".$_POST['route_name']."' ,
			route_description 	= '".$_POST['route_description']."' , 

			route_start	= '".$_POST['route_start']."',
			route_end	= '".$_POST['route_end']."',
			route_distance	= '".$_POST['route_distance']."',
			route_avg_time	= '".$_POST['route_avg_time']."'  ");

		
	}
	
	}
	?>
<?php
//print_r($_POST);
//exit;
?>
</body>



<div style="width:100%;height:400px; ">



<style>
table tr td
{
	text-align:center;border-top:2px solid #000;border-left:2px solid #000;background-color:#FFFFFF;}
table tr th
{
     text-align:center;border-top:2px solid #000;border-left:2px solid #000;background-color:#FFFFFF;
}
</style>
	
	</body>
</html>



<table style="border-bottom:2px solid #000;border-right:2px solid #000; width:1100px;margin:0 auto;">

<tr>
     <th>
		Bus Id
	</th>
	<th>
		Bus Title
	</th>
	<th>
		Bus Description
	</th>
	<th>
		Bus No	
	</th>
	<th>
		Bus Color	
	</th>
		<th>
		Bus Mileage	
	</th>
		<th>
		Bus Driver	
	</th>
		<th>
		Bus Doctor	
	</th>
		<th>
		Bus Hostess	
	</th>
	<th>
		Route Name
	</th>
	<th>
		  Route Description
	</th>
	<th>
		Route Map	
	</th>
	<th>
		Route Start	
	</th>
		<th>
		Route End	
	</th>
		<th>
		Route Distance	
	</th>
		<th>
		Route Avg Time	
	</th>

	<th>
		Action
	</th>

</tr>
	
<?php
	$counter=0;
    foreach($table_data as $each_row){  $counter++ ?>
	
<tr style="border-bottom:1px solid #000;">
	
		
	
	<td>
	<?php echo $counter; ?>
	</td>
	<td>
	<?php echo $each_row['vehicle_name'] ?> 
	</td>
	<td>
	   <?php echo $each_row['vehicle_description'] ?> 
	</td>
	
	<td>
	<?php echo $each_row['vehicle_no'] ?> 
	</td>
	<td>
	<?php echo $each_row['vehicle_color'] ?> 
	</td>
	<td>
	<?php echo $each_row['vehicle_mileage'] ?> 
	</td>

<td>
	<?php echo $each_row['vehicle_driver'] ?> 
	</td>

<td>
	<?php echo $each_row['vehicle_doctor'] ?> 
	</td>

<td>
	<?php echo $each_row['vehicle_hostess'] ?> 
	</td>

<td>
	<?php echo $each_row['route_name'] ?> 
	</td>
	<td>
	   <?php echo $each_row['route_description'] ?> 
	</td>
	
	<td>
	<img src="image/<?php echo $each_row['route_map']; ?>" style="max-width:150px;">
	</td>
	<td>
	<?php echo $each_row['route_start'] ?> 
	</td>
	<td>
	<?php echo $each_row['route_end'] ?> 
	</td>

<td>
	<?php echo $each_row['route_distance'] ?> 
	</td>

<td>
	<?php echo $each_row['route_avg_time'] ?> 
	</td>



	<td>
		
		
        <a href="<?php echo ADMIN_URL.'bus_detail.php?edit='.$each_row['vehicle_id'] ?>"><img src="image/edit.png"></a>
		
		<a onClick="return confirmation();" href="<?php echo ADMIN_URL.'bus_detail.php?delete='.$each_row['vehicle_id'] ?>"><img src="image/delete.png"></a>
		</td>
	
	</tr>
	
 <?php  } ?>
	</table>
	
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


</div>
<?php include(ADMIN_PATH.'include/footer.php'); ?>
</body>
</html>
