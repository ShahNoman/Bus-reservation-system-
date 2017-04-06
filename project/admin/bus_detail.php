<?php

     
include('../config.php');
$page = 'bus_detail';	
?>


<?php include(ADMIN_PATH.'include/header.php'); ?>
<?php include(ADMIN_PATH.'include/sidbar.php'); ?>

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
					



<form action="<?php echo ADMIN_URL; ?>action/general.action.php" method="post"	>
	
    Bus Name <br><br>
    <input type="text" name="vehicle_name"   value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_name']; } ?>"      required style="width:900px;height:35px;">	<div id="my_error_data"></div><br><br>
	

Bus Description<br><br>
<input type="text" name="vehicle_description"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_description']; } ?>" required style="width:900px;height:35px;"> <div id="my_error_data"></div><br><br>


Bus No<br><br>
<input type="text" name="vehicle_no"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_no']; } ?>" required style="width:900px;height:35px;"><br><br>

Bus Color	<br><br>
<input type="text" name="vehicle_color" value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_color']; } ?>" required  style="width:900px;height:35px;"><br><br>

Bus Mileage	<br><br>
<input type="text" name="vehicle_mileage"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_mileage']; } ?>" required  style="width:900px;height:35px;"><br><br>


Bus Driver	<br><br>
<input type="text" name="vehicle_driver"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_driver']; } ?>" required  style="width:900px;height:35px;"><br><br>


Bus Doctor	<br><br>
<input type="text" name="vehicle_doctor"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_doctor']; } ?>" required  style="width:900px;height:35px;"><br><br>

Bus Hostess	<br><br>
<input type="text" name="vehicle_hostess"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['vehicle_hostess']; } ?>" required  style="width:900px;height:35px;"><br><br>










						<?php if(isset($_GET['edit']) && $_GET['edit']!="")
						{ ?>
							<input type="hidden" name="edit" value="<?php echo $_GET['edit']; ?>">
							<input type="hidden" name="process" value="update">

						 <?php }elseif(isset($_GET['delete']) && $_GET['delete']!=""){ ?>
						  <input type="hidden" name="process" value="delete">
						  
						  <?php }else { ?>
                         <input type="hidden" name="process" value="insert">
                         <?php } ?>

                         
						<input type="hidden" name="page" value="bus_detail">









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

	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
		
		
        <a href="<?php echo ADMIN_URL.'bus_detail.php?edit='.$each_row['vehicle_id'] ?>"><img src="image/edit.png"></a>
		
		<a onClick="return confirmation();" href="<?php echo ADMIN_URL.'bus_detail.php?delete='.$each_row['vehicle_id'] ?>"><img src="image/delete.png"></a>
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
