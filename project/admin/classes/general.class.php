	<?php
class general
{

	private $hostname = "";
	private $username = "";
	private $password = "";
	private $database = "";
	


	private $conn = "";

	function table_data($table,$where,$order,$limit)
	{
		
		$query = "select * from ".$table." ".$where." ".$order." ".$limit;
		
		$conn = mysqli_connect(HOST,USER,PASS,DB);
		$sql = mysqli_query($conn,$query);

		$i=0;
		while($row = mysqli_fetch_assoc($sql))
		{
			$data[$i] = $row;
			$i++;
		}
		return $data;
		$conn = null;
	}
	
	function insert($table,$fields)
	{
		$conn = mysqli_connect(HOST,USER,PASS,DB);
		$sql = mysqli_query($conn,$query);
		$set = "";
		foreach($fields as $keys=>$vals)
		{
			$set .= $keys." = '".$vals."', "; 
		}
		
		$set = substr($set, 0, -2);
	
		 $query = "insert into ".$table." set ".$set;
		if(mysqli_query($conn,$query))
		{ 
		return "success";
		}
		else
		{
	return "failed"; 
		}
		$conn = null;
	}
	
		/*function inserttwo($table,$fields)
	{
		$conn = mysqli_connect(HOST,USER,PASS,DB);
		$sql = mysqli_query($conn,$query);
		$set = "";
		foreach($fields as $keys=>$vals)
		{
			$set .= $keys." = '".$vals."', "; 
		}
		
		$set = substr($set, 0, -2);
	
		 $query = "insert into ".$table." set ".$set;
		if(mysqli_query($query))
		{ 
		$id 	= mysql_insert_id();
		}
		else
		{
	return "failed"; 
		}
		$conn = null;
	}*/
	
	
	function update($table,$fields,$where)
	{
		$conn = mysqli_connect(HOST,USER,PASS,DB);
		$sql = mysqli_query($conn,$query);
		$set = "";
		foreach($fields as $keys=>$vals)
		{ $set .= $keys." = '".$vals."', "; }
		
		$set = substr($set, 0, -2);
	
		$query = "update ".$table." set ".$set." where ".$where;

		if(mysqli_query($conn,$query))
		{ return "success"; }
		else{ return "failed"; 	}
		$conn = null;
	}

	function editdata($table,$field,$value)
	{
		$conn = mysqli_connect(HOST,USER,PASS,DB);
		$sql = mysqli_query($conn,$query);

		$query = "select * from ".$table." where ".$field." = '".$value."'";
		$data = mysqli_query($conn,$query);
		
		return $editdata = mysqli_fetch_assoc($data);

		$conn = null;
	}
	
	function remove($table,$id_name,$id_value)
	{
		$query = "delete from ".$table." where ".$id_name." = ".$id_value;
				
		$conn = mysqli_connect(HOST,USER,PASS,DB);
		mysqli_query($conn,$query);
		$conn = null;
	}

	
	
	
	
	




function get_user_info_by_id($id)
{
		$conn = mysqli_connect(HOST,USER,PASS,DB);

		$query = "SELECT * FROM user_tbl  where user_id = '".$id."' ";
		  	 
		$sql = mysqli_query($conn,$query);

		$row = mysqli_fetch_array($sql);
		
		return $row;

		$conn = null;
}




	function aproved($id)
	{
		$conn = mysqli_connect(HOST,USER,PASS,DB);
		$sql = mysqli_query($conn,$query);
		
	
		$query = "update travel_tbl set ticket_status = 'confirmed' where travel_id	 = '".$id."' ";

		if(mysqli_query($conn,$query))
		{ return "success"; }
		else{ return "failed"; 	}
		$conn = null;
	}






	
function staff_duty()
	{

		$conn = mysqli_connect(HOST,USER,PASS,DB);

        $query = "SELECT vehicle_tbl.*, staff_tbl.*  FROM vehicle_tbl,staff_tbl  WHERE vehicle_tbl.vehicle_id = staff_tbl.vehicle_id ";
		
				
		$sql = mysqli_query($conn,$query);
  	
		$i=0;
		while($row = mysqli_fetch_assoc($sql))
		{
			$data[$i] = $row; 
			$i++;
		}
		return $data;
		$conn = null;
	}
	
	
	
	
	
	
	
	
function time_table()
	{

		$conn = mysqli_connect(HOST,USER,PASS,DB);

        $query = "select * from vehicle_tbl left join route_tbl on route_tbl.vehicle_id = vehicle_tbl.vehicle_id ";
		
		
		$sql = mysqli_query($conn,$query);
  	
		$i=0;
		while($row = mysqli_fetch_assoc($sql))
		{
			$data[$i] = $row; 
			$i++;
		}
		return $data;
		$conn = null;
	}
	
	
	
	
	
	
}	
?>