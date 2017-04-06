

<?php

   
include('config.php');
	 
$db = new general;
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">

<?php include(PATH.'include/header.php') ?>


<?php 
	$gen = new general; 
	$table_data_news = $gen->table_data('news_event_tbl','',"order by newsevent_id asc","");
	
	
	?>
	
	
	

<div style="width:1100px;height:auto;margin-top:-20px;">

<div style="width:100%;height:auto; background-color:#EDEDED; background-image:url(images/news.png);">
<h1 style="text-align:center;color:#FC590A;">News&Events </h1>

<?php
	
    foreach($table_data_news as $each_row){ ?>

<div style="width:440px;height:150px;margin-left:127px;margin-top:-20px;">

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


<?php include(PATH.'include/footer.php'); ?>
</div>
</body>

</html>
