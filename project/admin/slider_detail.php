<?php

     
include('../config.php');
$page = 'slider_detail';
$check = new login;
$check->check_login();	
?>


<?php include(ADMIN_PATH.'include/header.php'); ?>
<?php include(ADMIN_PATH.'include/sidbar.php'); ?>




<?php 
	$gen = new general; 
	$table_data = $gen->table_data('slider_tbl','',"order by slider_id asc","");

	
	
	
	if(isset($_GET['edit']) && $_GET['edit']!="")
	{	$editdata = $gen->editdata('slider_tbl','slider_id',$_GET['edit']);  }

	?>
	
	
	
	
	<?php if(isset($_GET['delete']) && $_GET['delete']!="")
	{  
	
		$gen->remove('slider_tbl','slider_id',$_GET['delete']);  
	
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

<form action="<?php echo ADMIN_URL; ?>action/general.action.php" method="post"	enctype="multipart/form-data">
	
Slider title1<br><br>
<input type="text" name="slider_title1"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['slider_title1']; } ?>" required style="width:900px;height:35px;"><br><br>

	
Slider title2<br><br>
<input type="text" name="slider_title2"  value="<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['slider_title2']; } ?>" required style="width:900px;height:35px;"><br><br>

Slider description<br><br>
<input type="text" name="slider_description"  value="<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['slider_description']; } ?>" required style="width:900px;height:35px;"><br><br>




                  
						<?php if(isset($_GET['edit']) && $_GET['edit']!=""){?>
							<img src="<?php echo ADMIN_URL.'image/'.$editdata['slider_img_small'];  ?>" style="max-height:120px;max-width:120px;">
						<?php } ?>



Slider img small	<br><br>
<input type="file" name="slider_img_small"  required style="width:300px;height:50px;"><br><br>

						<?php if(isset($_GET['edit']) && $_GET['edit']!=""){?>
							<img src="<?php echo ADMIN_URL.'image/'.$editdata['slider_img_large'];  ?>" style="max-height:120px;max-width:120px;">
						<?php } ?>



slider_img_large	<br><br>
<input type="file" name="slider_img_large"  required style="width:300px;height:50px;"><br><br>




						<?php if(isset($_GET['edit']) && $_GET['edit']!=""){?>
							<img src="<?php echo ADMIN_URL.'image/'.$editdata['slider_img_thumb'];  ?>" style="max-height:120px;max-width:120px;">
						<?php } ?>



slider_img_thumb	<br><br>
<input type="file" name="slider_img_thumb"  required style="width:300px;height:50px;"><br><br>





	<?php if(isset($_GET['edit']) && $_GET['edit']!="")
						{ ?>
							<input type="hidden" name="edit" value="<?php echo $_GET['edit']; ?>">
							<input type="hidden" name="process" value="update">

	<?php }elseif(isset($_GET['delete']) && $_GET['delete']!=""){ ?>
						  <input type="hidden" name="process" value="delete">
						  
						  <?php }else { ?>
                         <input type="hidden" name="process" value="insert">
                         <?php } ?>

                         
						<input type="hidden" name="page" value="slider_detail">






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
		Slider id
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Slider Title1
	</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Slider Title2
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		   Slider Description
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Slider img small	
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Slider img large
	</th>
		<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		Slider img thumb	
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
	<?php echo $each_row['slider_title1'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	   <?php echo $each_row['slider_title2'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	   <?php echo $each_row['slider_description'] ?> 
	</td>
	
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<img src="image/<?php echo $each_row['slider_img_small']; ?>" style="max-width:150px;">
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<img src="image/<?php echo $each_row['slider_img_large']; ?>" style="max-width:150px;">
	</td>
<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<img src="image/<?php echo $each_row['slider_img_thumb']; ?>" style="max-width:150px;">
	</td>
			
		<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
		 <a href="<?php echo ADMIN_URL.'slider_detail.php?edit='.$each_row['slider_id'] ?>"><img src="image/edit.png"></a>
		
		<a onClick="return confirmation();" href="<?php echo ADMIN_URL.'slider_detail.php?delete='.$each_row['slider_id'] ?>"><img src="image/delete.png"></a>

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
