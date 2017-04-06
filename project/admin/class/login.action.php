<?php


$ob = new login;

$query="select * from tbl";
$where="where user_name = '".$_POST['user_name']."' and password = '".$_POST['password']."' ";
$order="";
$limit="";

$data = null;
		
		
	unset($_SESSION['user']);	
		
		
		
$data = $ob->fetch_rows($query,$where,$order,$limit);

if(count($data>0)){

     $_SESSION['noman']['user']['user_id']   = $data[0]['user_id'];
	 $_SESSION['noman']['user']['user_name'] = $data[0]['user_name'];
	 $_SESSION['noman']['user']['user_type'] = $data[0]['user_type'];

if($_SESSION['noman']['user']['user_type'] == "admin")
{
  header('location:admin.php');
}
elseif($_SESSION['noman']['user']['user_type'] == "customer")
{
  header('location:customer.php');
}
exit;
}
		
else{

$_SESSION['noman']['error_massege'] = "wrong password try again";

header('location:login.php');
exit;

}			   
?>			   