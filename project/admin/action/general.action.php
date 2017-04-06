<?php
include('../../config.php');

$time = mktime();

$db= new general;

/*
print "<pre>";
print_r($_POST);
print_r($_FILES);
print "</pre>";
*/





$page = $_POST['page'];	




if($page == 'configuration')			// 2
{
	$vals = null;

	$vals['config_title'] 			= $_POST['config_title'];
	$vals['config_name'] 		= $_POST['config_name'];
	$vals['config_about'] 			= $_POST['config_about'];
	

	if($_FILES['config_image']['name']!='')
	{
		move_uploaded_file($_FILES['config_image']['tmp_name'],ADMIN_PATH."image/logo.png");
	}
	

	$where = "config_id = '1' ";
	$result = $db->update("config_site_tbl",$vals,$where);


}









if($page == 'bus_detail')
{
	$vals = null;
	if($_POST['process']=='insert')
	{
		$vals['vehicle_name'] 		     = $_POST['vehicle_name'];
		$vals['vehicle_description'] 	= $_POST['vehicle_description'];
		
		$vals['vehicle_no'] 	         = $_POST['vehicle_no'];
		$vals['vehicle_color'] 		    = $_POST['vehicle_color'];
		$vals['vehicle_mileage'] 	       = $_POST['vehicle_mileage'];
		$vals['vehicle_driver'] 	       = $_POST['vehicle_driver'];
		$vals['vehicle_doctor'] 	       = $_POST['vehicle_doctor'];
		$vals['vehicle_hostess'] 	       = $_POST['vehicle_hostess'];
		
		$result = $db->insert("vehicle_tbl",$vals);
	}
	elseif($_POST['process']=='update')
	{
		$vals['vehicle_name'] 		     = $_POST['vehicle_name'];
		$vals['vehicle_description'] 	= $_POST['vehicle_description'];
		
		$vals['vehicle_no'] 	= $_POST['vehicle_no'];
		$vals['vehicle_color'] 		    = $_POST['vehicle_color'];
		$vals['vehicle_mileage'] 	       = $_POST['vehicle_mileage'];
		$vals['vehicle_driver'] 	       = $_POST['vehicle_driver'];
		$vals['vehicle_doctor'] 	       = $_POST['vehicle_doctor'];
		$vals['vehicle_hostess'] 	       = $_POST['vehicle_hostess'];
	
		
		$where = "vehicle_id = '".$_POST['edit']."' ";
		$result = $db->update("vehicle_tbl",$vals,$where);


	}
	elseif($_POST['process']=='delete')
	{
	  $deleted = $db->remove("vehicle_tbl",'vehicle_id',$_GET['vehicle_id']);
}
}









if($page == 'route_detail')
{
	$vals = null;
	if($_POST['process']=='insert')
	{
	    $vals['vehicle_id'] 		= $_POST['vehicle_id'];
		$vals['route_name'] 		     = $_POST['route_name'];
		$vals['route_description'] 	= $_POST['route_description'];
		
		$vals['route_start'] 	= $_POST['route_start'];
		$vals['route_end'] 		    = $_POST['route_end'];
		$vals['route_distance'] 	       = $_POST['route_distance'];
		$vals['dept_time'] 	       = $_POST['dept_time'];
		$vals['ticket_price'] 	       = $_POST['ticket_price'];
		$vals['route_map'] 	       = $_POST['route_map'];
		if($_FILES['route_map']['name']!='')
		{
			$vals['route_map'] = $time.$_FILES['route_map']['name'];
			move_uploaded_file($_FILES['route_map']['tmp_name'],ADMIN_PATH."image/".$vals['route_map']);
		}

		$result = $db->insert("route_tbl",$vals);

	}
	elseif($_POST['process']=='update')
	{
		$vals['route_name'] 		     = $_POST['route_name'];
		$vals['route_description'] 	= $_POST['route_description'];
		
		$vals['route_start'] 	= $_POST['route_start'];
			$vals['route_end'] 		    = $_POST['route_end'];
		$vals['route_distance'] 	       = $_POST['route_distance'];
		$vals['route_avg_time'] 	       = $_POST['route_avg_time'];
		$vals['ticket_price'] 	       = $_POST['ticket_price'];
		$vals['route_map'] 	       = $_POST['route_map'];
		   
		   if($_FILES['route_map']['name']!='')
		{
			$vals['route_map'] = $time.$_FILES['route_map']['name'];
			move_uploaded_file($_FILES['route_map']['tmp_name'],ADMIN_PATH."image/".$vals['route_map']);
		}

		   
		   
		$where = "route_id = '".$_POST['edit']."' ";
		$result = $db->update("route_tbl",$vals,$where);


	}
	elseif($_POST['process']=='delete')
	{
	  $result = $db->remove("route_tbl",'route_id',$_GET['route_id']);
}
}






if($page == 'journey')
{
	$vals = null;
	if($_POST['process']=='insert')
	{
	    $vals['vehicle_id'] 		= $_POST['vehicle_id'];
		$vals['route_id'] 		     = $_POST['route_id'];
	

		$result = $db->insert("journey_tbl",$vals);
	}
	

}


if($page == 'travel')
{
	$vals = null;
	if($_POST['process']=='insert')
	{
	    $vals['user_id'] 		= $_POST['user_id'];
	
		$vals['vehicle_id'] 		     = $_POST['vehicle_id'];
		$vals['route_id'] 		     = $_POST['route_id'];
		$vals['ticket_status'] 		   =  'unconfirm';
		
	

		$result = $db->insert("travel_tbl",$vals);

	}
	

}

if($page == 'customer_travel')
{
	$vals = null;
	if($_POST['process']=='insert')
	{
	    $vals['user_id'] 		= $_POST['user_id'];
		$vals['vehicle_id'] 		     = $_POST['vehicle_id'];
		$vals['route_id'] 		     = $_POST['route_id'];
		$vals['no_of_tickets'] 		     = $_POST['no_of_tickets'];
		$vals['total_price'] 		     = $_POST['total_price'];
		$vals['ticket_prices'] 		     = $_POST['ticket_prices'];
		$vals['ticket_status'] 		   =  'Pending';
		
	

		$result = $db->insert("travel_tbl",$vals);

	}
	

}

/*
if($page == 'ctravel')
{
	$vals = null;
	if($_POST['process']=='insert')
	{
	    $vals['user_id'] 		= $_POST['user_id'];
		$vals['ticket_id'] 		     = $_POST['ticket_id'];
		$vals['journey_id'] 		     = $_POST['journey_id'];
		$vals['ticket_status'] 		     = 'unconfirm';
	

		$result = $db->insert("travel_tbl",$vals);
		print_r($result);
		exit;
	}
	}

if($page == 'mail')
{
	$vals = null;	
	
	if($_POST['process']=='update')
	{
		$vals['ticket_status'] 		     = 'confirm';
		
				   
		$where = "travel_id = '".$_POST['id']."' ";
		$result = $db->update("travel_tbl",$vals,$where);


	}


}

*/




if($page == 'slider_detail')
{
	$vals = null;
	if($_POST['process']=='insert')
	{
	    $vals['slider_title1'] 		= $_POST['slider_title1'];
		$vals['slider_title2'] 		     = $_POST['slider_title2'];
		$vals['slider_description'] 	= $_POST['slider_description'];
		
		$vals['slider_img_small'] 	       = $_POST['slider_img_small'];
		if($_FILES['slider_img_small']['name']!='')
		{
			$vals['slider_img_small'] = $time.$_FILES['slider_img_small']['name'];
			move_uploaded_file($_FILES['slider_img_small']['tmp_name'],ADMIN_PATH."image/".$vals['slider_img_small']);
		}




$vals['slider_img_large'] 	       = $_POST['slider_img_large'];
		if($_FILES['slider_img_large']['name']!='')
		{
			$vals['slider_img_large'] = $time.$_FILES['slider_img_large']['name'];
			move_uploaded_file($_FILES['slider_img_large']['tmp_name'],ADMIN_PATH."image/".$vals['slider_img_large']);
		}


$vals['slider_img_thumb'] 	       = $_POST['slider_img_thumb'];
		if($_FILES['slider_img_thumb']['name']!='')
		{
			$vals['slider_img_thumb'] = $time.$_FILES['slider_img_thumb']['name'];
			move_uploaded_file($_FILES['slider_img_thumb']['tmp_name'],ADMIN_PATH."image/".$vals['slider_img_thumb']);
		}


		$result = $db->insert("slider_tbl",$vals);
	}
	elseif($_POST['process']=='update')
	{
	    $vals['slider_title1'] 		= $_POST['slider_title1'];
		$vals['slider_title2'] 		     = $_POST['slider_title2'];
		$vals['slider_description'] 	= $_POST['slider_description'];
		
		$vals['slider_img_small'] 	       = $_POST['slider_img_small'];
		if($_FILES['route_map']['name']!='')
		{
			$vals['slider_img_small'] = $time.$_FILES['slider_img_small']['name'];
			move_uploaded_file($_FILES['slider_img_small']['tmp_name'],ADMIN_PATH."image/".$vals['slider_img_small']);
		}




$vals['slider_img_large'] 	       = $_POST['slider_img_large'];
		if($_FILES['slider_img_large']['name']!='')
		{
			$vals['slider_img_large'] = $time.$_FILES['slider_img_large']['name'];
			move_uploaded_file($_FILES['slider_img_large']['tmp_name'],ADMIN_PATH."image/".$vals['slider_img_large']);
		}


$vals['slider_img_thumb'] 	       = $_POST['slider_img_thumb'];
		if($_FILES['slider_img_thumb']['name']!='')
		{
			$vals['slider_img_thumb'] = $time.$_FILES['slider_img_thumb']['name'];
			move_uploaded_file($_FILES['slider_img_thumb']['tmp_name'],ADMIN_PATH."image/".$vals['slider_img_thumb']);
		}
		   
		   
		$where = "slider_id = '".$_POST['edit']."' ";
		$result = $db->update("slider_tbl",$vals,$where);


	}
	elseif($_POST['process']=='delete')
	{
	  $result = $db->remove("slider_tbl",'slider_id',$_GET['slider_id']);
}
}





if($page == 'news_event')
{
	$vals = null;
	if($_POST['process']=='insert')
	{
		$vals['newsevent_title'] 		     = $_POST['newsevent_title'];
		$vals['newsevent_description'] 	     = $_POST['newsevent_description'];
		
		$vals['newsevent_date'] 	          = $_POST['newsevent_date'];
		$vals['newsevent_visiability'] 		    = $_POST['newsevent_visiability'];
		
		$result = $db->insert("news_event_tbl",$vals);
	}
	elseif($_POST['process']=='update')
	{
		$vals['newsevent_title'] 		     = $_POST['newsevent_title'];
		$vals['newsevent_description'] 	     = $_POST['newsevent_description'];
		
		$vals['newsevent_date'] 	          = $_POST['newsevent_date'];
		$vals['newsevent_visiability'] 		    = $_POST['newsevent_visiability'];

		
		$where = "newsevent_id = '".$_POST['edit']."' ";
		$result = $db->update("news_event_tbl",$vals,$where);


	}
	elseif($_POST['process']=='delete')
	{
	  $deleted = $db->remove("news_event_tbl",'newsevent_id',$_GET['newsevent_id']);
}
}

if($page == 'ticket')
{
	$vals = null;
	if($_POST['process']=='insert')
	{
		$vals['ticket_title'] 		     = $_POST['ticket_title'];
		$vals['ticket_price'] 	     = $_POST['ticket_price'];
		
		$vals['ticket_detail'] 	          = $_POST['ticket_detail'];
	
		
		$result = $db->insert("ticket_tbl",$vals);
	}
	elseif($_POST['process']=='update')
	{
		$vals['ticket_title'] 		     = $_POST['ticket_title'];
		$vals['ticket_price'] 	     = $_POST['ticket_price'];
		
		$vals['ticket_detail'] 	          = $_POST['ticket_detail'];
	

		
		$where = "ticket_id = '".$_POST['edit']."' ";
		$result = $db->update("ticket_tbl",$vals,$where);


	}
	elseif($_POST['process']=='delete')
	{
	  $deleted = $db->remove("ticket_tbl",'ticket_id',$_GET['ticket_id']);
}
}











if($page == 'admin')			
{

	$vals = null;

	$vals['user_name'] 			  = $_POST['user_name'];
	$vals['user_fullname'] 		  = $_POST['user_fullname'];
	$vals['password'] 		      = $_POST['password'];
	$vals['user_type'] 			  = $_POST['user_type'];
	$vals['status'] 			  = $_POST['status'];
	$vals['email'] 		          = $_POST['email'];
	
	$vals['city'] 		          = $_POST['city'];
	$vals['gender'] 		      = $_POST['gender'];
	$vals['date_birth'] 		  = $_POST['date_birth'];
	$vals['contact_no'] 		  = $_POST['contact_no'];
	
	

		   
		   if($_FILES['user_photo']['name']!='')
		{
			$vals['user_photo'] = $time.$_FILES['user_photo']['name'];
			move_uploaded_file($_FILES['user_photo']['tmp_name'],ADMIN_PATH."image/".$vals['user_photo']);
        }

	$where = "user_id = '14' ";
	$result = $db->update("user_tbl",$vals,$where);


}







if($page == 'customer')
{
	$vals = null;
	if($_POST['process']=='update')
	{
	
		  $vals['user_name'] 		      = $_POST['user_name'];
		  $vals['user_fullname'] 	      = $_POST['user_fullname'];
		  $vals['user_type'] 			  = 'CUSTOMER';
	      $vals['status'] 			      = 'online'; 	          
          $vals['password']      	      = $_POST['password'];
	      $vals['email'] 	              = $_POST['email'];
		  $vals['city'] 	              = $_POST['city'];
		  $vals['gender'] 	              = $_POST['gender'];
		 
		   $vals['contact_no'] 	          = $_POST['contact_no'];
		
		
		if($_FILES['user_photo']['name']!='')
		
		{
			$vals['user_photo'] = $time.$_FILES['user_photo']['name'];
			move_uploaded_file($_FILES['user_photo']['tmp_name'],CUSTOMER_PATH."image/".$vals['user_photo']);
		}
		   
		   
		$where = "user_id = '".$_POST['user_id']."' ";
		$result = $db->update("user_tbl",$vals,$where);


	}
}

if($page == 'manager')
{
	$vals = null;
	if($_POST['process']=='update')
	{
	
		  $vals['user_name'] 		      = $_POST['user_name'];
		  $vals['user_fullname'] 	      = $_POST['user_fullname'];
		  $vals['user_type'] 			  = 'MANAGER';
	      $vals['status'] 			      = 'online'; 	          
          $vals['password']      	      = $_POST['password'];
	      $vals['email'] 	              = $_POST['email'];
		  $vals['city'] 	              = $_POST['city'];
		  $vals['gender'] 	              = $_POST['gender'];
		  $vals['date_birth'] 	          = $_POST['date_birth'];
		   $vals['contact_no'] 	          = $_POST['contact_no'];
		
		
		if($_FILES['user_photo']['name']!='')
		
		{
			$vals['user_photo'] = $time.$_FILES['user_photo']['name'];
			move_uploaded_file($_FILES['user_photo']['tmp_name'],CUSTOMER_PATH."image/".$vals['user_photo']);
		}
		   
		   
		$where = "user_id = '".$_POST['user_id']."' ";
		$result = $db->update("user_tbl",$vals,$where);


	}
}


if($page == 'staff')
{
	$vals = null;
	if($_POST['process']=='update')
	{
	
		  $vals['user_name'] 		      = $_POST['user_name'];
		  $vals['user_fullname'] 	      = $_POST['user_fullname'];
		  $vals['user_type'] 			  = 'STAFF';
	      $vals['status'] 			      = 'online'; 	          
          $vals['password']      	      = $_POST['password'];
	      $vals['email'] 	              = $_POST['email'];
		  $vals['city'] 	              = $_POST['city'];
		  $vals['gender'] 	              = $_POST['gender'];
		  $vals['date_birth'] 	          = $_POST['date_birth'];
		   $vals['contact_no'] 	          = $_POST['contact_no'];
		
		
		if($_FILES['user_photo']['name']!='')
		
		{
			$vals['user_photo'] = $time.$_FILES['user_photo']['name'];
			move_uploaded_file($_FILES['user_photo']['tmp_name'],CUSTOMER_PATH."image/".$vals['user_photo']);
		}
		   
		   
		$where = "user_id = '".$_POST['user_id']."' ";
		$result = $db->update("user_tbl",$vals,$where);


	}
}



if($page == 'register')			// 2
{

	$vals = null;

	$vals['user_name'] 			  = $_POST['user_name'];
	$vals['user_fullname'] 		  = $_POST['user_fullname'];
	$vals['password'] 		      = $_POST['password'];
	$vals['user_type'] 			  = 'CUSTOMER';

	$vals['status'] 			  = 'online';
	$vals['user_photo'] 		    = $_POST['user_photo'];

	
if($_FILES['user_photo']['name']!='')
		{
			$vals['user_photo'] = $time.$_FILES['user_photo']['name'];
			move_uploaded_file($_FILES['user_photo']['tmp_name'],CUSTOMER_PATH."image/".$vals['user_photo']);
 }
	$vals['email'] 		          = $_POST['email'];

	$vals['city'] 		          = $_POST['city'];
	$vals['gender'] 		      = $_POST['gender'];
	$vals['date_birth'] 		  = $_POST['date_birth'];
	$vals['contact_no'] 		  = $_POST['contact_no'];
	
	
	
$result = $db->insert("user_tbl",$vals);



}




















if($page == 'contact')
{
	$vals = null;
	if($_POST['process']=='insert')
	{
		$vals['contact_us_name'] 		     = $_POST['contact_us_name'];
		$vals['contact_us_subject'] 	= $_POST['contact_us_subject'];
		
		$vals['contact_us_message'] 	         = $_POST['contact_us_message'];
		$vals['contact_us_email'] 		    = $_POST['contact_us_email'];
		
				$result = $db->insert("contact_us_tbl",$vals);
	}

	elseif($_POST['process']=='delete')
	{
	  $deleted = $db->remove("contact_us_tbl",'contact_us_id',$_GET['contact_us_id']);
}
}













if($result=='success'){ $_SESSION['webapp']['message'] = "Action Performed Successfully"; }
elseif($result=='failed'){$_SESSION['webapp']['message'] = "Something went wrong, Please try again later"; }








if($page == 'admin'){	header('location: '.ADMIN_URL."profile.php");}
if($page == 'slider_detail'){	header('location: '.ADMIN_URL."slider_detail.php");}
if($page == 'bus_detail'){	header('location: '.ADMIN_URL."bus_detail.php");}
if($page == 'route_detail'){	header('location: '.ADMIN_URL."route_detail.php");}
if($page == 'news_event'){	header('location: '.ADMIN_URL."news_event.php");}
if($page == 'configuration'){	header('location: '.ADMIN_URL."configuration.php");}

if($page == 'register'){	header('location: '.URL."user_register.php");}
if($page == 'ticket'){	header('location: '.ADMIN_URL."ticket.php");}
if($page == 'journey'){	header('location: '.ADMIN_URL."journey.php");}
if($page == 'travel'){	header('location: '.ADMIN_URL."travel.php");}
if($page == 'customer'){	header('location: '.CUSTOMER_URL."customer.php");}
if($page == 'manager'){	header('location: '.MANAGER_URL."manager.php");}
if($page == 'staff'){	header('location: '.STAFF_URL."staff.php");}
if($page == 'customer_travel'){	header('location: '.CUSTOMER_URL."travel.php");}
if($page == 'contact'){	header('location: '.CUSTOMER_URL."contact.php");}
//if($page == 'mail'){	header('location: '.MANAGER_URL."mail.php");}

exit;
?>