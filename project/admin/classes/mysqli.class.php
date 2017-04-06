<?php
class connection
{

	private $hostname = "";
	private $username = "";
	private $password = "";
	private $database = "";


	private $conn = "";

	function execute($query)
	{
		$conn = mysqli_connect(HOST,USER,PASS,DB);			
		return $sql = mysqli_query($conn,$query);
		$conn = null;
	}
	
	
	function fetch_record($query,$where,$order,$limit)			
	{
		//$sql =
		$data = mysqli_fetch_assoc($sql);
	}
	
	
	function fetch_rows($query,$where,$order,$limit)
	{
		$conn = mysqli_connect(HOST,USER,PASS,DB);
		$sql = mysqli_query($conn,$query.' '.$where.' '.$order.' '.$limit);

		$i=0;
		while($sql = mysqli_fetch_assoc($sql))
		{
			$data[$i] = $sql; 
			$i++;
		}
		return $data;
		$conn = null;
	}
	
	
	
	function update($table,$set,$where)
	{
		$sql = mysqli_query($conn,$query);

		$query = "update tbl_".$table." set ".$set." where ".$where;
		$sql = mysqli_query($query);
	}
	
		
	function insert($table,$set)
	{
		$sql = mysqli_query($conn,$query);

		$query = "update tbl_".$table." set ".$set;
		$sql = mysqli_query($query);
	}
	
	


}
?>