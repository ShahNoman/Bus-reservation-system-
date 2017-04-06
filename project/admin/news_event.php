<?php 
		include('../config.php');
$check = new login;
$check->check_login();
$page = 'news_event';	
?>	
<?php include(ADMIN_PATH.'include/header.php'); ?>
<?php include(ADMIN_PATH.'include/sidbar.php'); ?>


<?php 
	$gen = new general; 
	$table_data = $gen->table_data('news_event_tbl','',"","");

	
	
	if(isset($_GET['edit']) && $_GET['edit']!="")
	{	$editdata = $gen->editdata('news_event_tbl','newsevent_id',$_GET['edit']);  }

	?>
	
	
	
	<?php if(isset($_GET['delete']) && $_GET['delete']!="")
	{  
	
		$gen->remove('news_event_tbl','newsevent_id',$_GET['delete']);  
	
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
	
News&Event Title<br><br>
<input type="text" name="newsevent_title"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!=""){echo $editdata ['newsevent_title']; } ?>" required style="width:900px;height:35px;"><br><br>


News&Event Description<br><br>
<input type="text" name="newsevent_description"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!="") {echo $editdata['newsevent_description']; } ?>"required style="width:900px;height:35px;"><br><br>

News&Event Date	<br><br>
<input type="text" name="newsevent_date"  id="datepicker"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!="") {echo $editdata['newsevent_date']; } ?>" required style="width:900px;height:35px;"><br><br>


News&Event Visiability	<br><br>
<input type="text" name="newsevent_visiability"  value= "<?php if(isset($_GET['edit']) && $_GET['edit']!="")                                 {echo $editdata['newsevent_visiability']; } ?>" required  style="width:900px;height:35px;"><br><br>


<?php if(isset($_GET['edit']) && $_GET['edit']!="")
						{ ?>
							<input type="hidden" name="edit" value="<?php echo $_GET['edit']; ?>">
							<input type="hidden" name="process" value="update">

 <?php }elseif(isset($_GET['delete']) && $_GET['delete']!=""){ ?>
						  <input type="hidden" name="process" value="delete">
						  
						  <?php }else { ?>
                         <input type="hidden" name="process" value="insert">
                         <?php } ?>

                         
						<input type="hidden" name="page" value="news_event">






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
		News&Event Id
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		News&Event Title
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
         News&Event Description
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		News&Event Date	
	</th>
	<th style="background-color:#ECF0F5;height:50px;width:150px;border-color:#ECF5ED;">
		News&Event Visiability	
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
	<?php echo $each_row['newsevent_title'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	   <?php echo $each_row['newsevent_description'] ?> 
	</td>
	
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['newsevent_date'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
	<?php echo $each_row['newsevent_visiability'] ?> 
	</td>
	<td style="background-color:#FFFFFF;height:50px;width:150px;border-color:#ECF5ED;">
		
		<a href="<?php echo ADMIN_URL.'news_event.php?edit='.$each_row['newsevent_id'] ?>"><img src="image/edit.png"></a>
		
		<a onClick="return confirmation();" href="<?php echo ADMIN_URL.'news_event.php?delete='.$each_row['newsevent_id'] ?>"><img src="image/delete.png"></a>

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
