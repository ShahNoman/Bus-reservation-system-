<?php
class login
{
	private $conn = "";

	function check_login()
	{
		$conn = mysqli_connect(HOST,USER,PASS,DB);

		 $query = "select * from user_tbl where user_id = ".$_SESSION['webapp']['user']['user_id'];
		$sql = mysqli_query($conn,$query);
		$data = mysqli_num_rows($sql);

		if($data>0)
		{
			// logged in
		}
		else
		{
			header('location: '.ADMIN_URL.'login.php');
		}
	}
	


}
?>