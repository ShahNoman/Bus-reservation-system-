
<html>
<head>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/styles.css" />
</head>	  
<body>
<!-- Header start --->

	<div class="header">
	
<?php	
$site_config_tmp = $db->table_data('config_site_tbl','where config_id="1"','',''); 
$site_config = $site_config_tmp[0];
 ?>

	<div class="upar_head">
	<p  style="float:left;margin-top:-0.1px;margin-left:672px;"><?php echo $site_config['config_title']; ?><!--Welcome,Already a member?--></p>
    <div class="login">
	<ul>
	
	<li><a href="<?php echo ADMIN_URL; ?>login.php">Login</a></li> <vr style="color:#000000;">|</vr>
	<li><a href="<?php echo URL; ?>user_register.php">New User Register</a></li>


	</ul>
	</div>
	</div>
	<div class="logo">
	<!--<img src="images/logo.png" style="max-height:140px;">-->
	<img src="<?php echo ADMIN_URL; ?>image/logo.png" style="max-height:140px;">
	</div>
	<div class="title">
	<h2 style="color:#000066;"><?php echo $site_config['config_name']; ?><!--Blue Bird Kohat Transport Corporation--></h2>
	</div>
  </div>
	<!-- Header end -->
	
	<!---menubar--->
	
<div class="menubar">
	<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>Home</span></a></li>
   <li class='has-sub'><a href='user_register.php'><span>User Registration</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span> 1</span></a>
            <ul>
               <li><a href='#'><span>3</span></a></li>
               <li class='last'><a href='#'><span>4</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span> 2</span></a>
            <ul>
               <li><a href='#'><span>5</span></a></li>
               <li class='last'><a href='#'><span>5</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='about.php'><span>About</span></a></li>
   <li><a href='routes.php'><span>All Routes</span></a></li>
   <li class='last'><a href='news&event.php'><span>News&Event</span></a></li>
</ul>
</div>

	</div>
	<!----end menubar---->

	
</body>
</html>