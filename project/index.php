

<?php

   
include('config.php');


 $db = new general;  
 
  ?>
<html>
<head>
<link rel="stylesheet" href="css/style.css">

</head>
<body style ="background-image:url(images/img2.jpg);">
<div class="container">

<?php include(PATH.'include/header.php') ?>




	
<?php 
	$gen = new general; 
	$table_data_news = $gen->table_data('news_event_tbl','',"","limit 0,2");	
?>
<!---slider start--->
<?php include('slider.php') ?>






  
<?php
if(isset($_GET['search']) && ($_GET['search']!=''))
{
	$where = "where route_start like '%".$_GET['search']."%' OR route_end like '%".$_GET['search']."%' ";
	
}

	?>
<div class="search_news">
<div class="search">
<h3 style="text-align:center;">Search For Bus Ticket</h3>
<div style="width:400px;margin-left:60px;">
From<br><br>
<form>
	<input type="text" name="search" value="<?php echo $_GET['search']; ?>" required  style="width:300px;height:35px;" >
<br><br><br>
To<br><br>

	<input type="text" name="search"  value="<?php echo $_GET['search']; ?>" required  style="width:300px;height:35px;" >
<br><br><br>
	 <input type="submit" value="search"  style="width:130px;height:35px;background-color:#FF7500;">
	 </form>
</div>




</div>
<div style="width:495px;height:400px;float:right; background-color:#EDEDED; background-image:url(images/news.png);">
<h1 style="text-align:center;color:#FC590A;">News&Events </h1>

<?php
	
    foreach($table_data_news as $each_row){ ?>

<div style="width:440px;height:150px;margin-left:27px;margin-top:-20px;">

<h3 style="color:#FC590A;"><?php echo $each_row['newsevent_title']; ?>  </h3>
<p><?php echo $each_row['newsevent_description']; ?>  </p>
Date:<?php echo $each_row['newsevent_date']; ?>
<hr style="width:380px;margin:0 auto;"></hr>
</div>
<?php } ?>
<!--<h3 style="color:#FC590A;"> kohat News </h3>
<p> kohat is one of the best city in pakistan.i also live in kohat kohat is one of the best city 
in pakistan.i also live in kohat kohat is one of the best city in pakistan.i also live in kohat </p>
<hr style="width:380px;margin:0 auto;"></hr>-->





</div>



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
	$gen = new general; 
	$table_data_route = $gen->table_data('route_tbl',$where,"order by route_id asc","limit 0,4");
	?>
	
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
		 <a href="<?php echo ADMIN_URL; ?>login.php">Book</a>
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
