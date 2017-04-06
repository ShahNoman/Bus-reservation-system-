<html>
<head>
	<link rel="stylesheet" href="css/style.css" />
</head>
<style>
.current {
	color:white;
	display:block;
	background:#1A2226;

}

	

	
</style>
<body>
<div class="sidebar">


<div class="sidebar_list">
<ul>
   <li><a <?php if($page=='admin'){echo 'class="current"';} ?>href='admin.php'>Dashboard</a></li>
      <li><a <?php if($page=='configuration'){echo 'class="current"';} ?>href='configuration.php'>Configuration</a></li>

   <li><a <?php if($page=='bus_detail'){echo 'class="current"';} ?>href='bus_detail.php'>Bus detail</a></li>
   <li><a <?php if($page=='route_detail'){echo 'class="current"';} ?>href='route_detail.php'>Route detail</a></li>
   <li><a <?php if($page=='staff'){echo 'class="current"';} ?>href='staff.php'>Staff detail</a></li>
   <li><a <?php if($page=='customer'){echo 'class="current"';} ?> href='customer.php'>Customer detail</a></li>
   <li><a <?php if($page=='news_event'){echo 'class="current"';} ?>href='news_event.php'>News & Events</a></li>
   <li><a <?php if($page=='ticket'){echo 'class="current"';} ?>href='ticket.php'>Ticket detail</a></li>
   <li><a <?php if($page=='slider_detail'){echo 'class="current"';} ?>href='slider_detail.php'>Slider detail</a></li>
  
   <li><a <?php if($page=='manager'){echo 'class="current"';} ?>href='manager.php'>Manager detail</a></li>
   
   <li><a <?php if($page=='travel'){echo 'class="current"';} ?>href='travel.php'>Travel detail</a></li>
   <li><a <?php if($page=='profile'){echo 'class="current"';} ?>href='profile.php'>Update Profile</a></li>
   <li><a <?php if($page=='mail'){echo 'class="current"';} ?>href='mail.php'>Mail</a></li>
   <li><a <?php if($page=='#'){echo 'class="current"';} ?>href='#'>Contact</a></li>
</ul>
</div>
</div>

</body>
</html>