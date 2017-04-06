<?php


class login
{

          private $hostname="";
		  private $username="";
		  private $password="";
		  private $database="";
		  
		  private $conn="";
		  
		  
      
	  
	  
	  function fetch_rows($query,$where,$order,$limit){
             
			 
			   $conn = mysqli_connect(HOST,USER,PASS,DB); 
			   $sql = mysqli_query($con,$query.' '.$where.' '.$order.' '.$limit);    
			   
			   $i=0;
			   
			   while($sql=mysql_fetch_assoc($sql))
			   {
			   $data[$i]= $sql;
			   $i++;
			   }
			   return $data;
			   $conn=null;
			   
		}
		
		
		}	   
			   
			   
?>			   