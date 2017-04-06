<?php 
	include('../config.php');

	
?>	



<?php 

	$gen = new general; 
	$table_data = $gen->staff_duty();


print "<pre>";
print_r($table_data);

print "</pre>";

	?>
	
	
<?php

    foreach($table_data as $each_row){ ?>
	
<tr style="border-bottom:1px solid #000;">
	
		
	
	<td>
	<?php echo $each_row['adress'] ?> 
	</td>
	<td>
	   <?php echo $each_row['vehicle_name'] ?> 
	</td>
	
	

	
	</tr>
	
 <?php  } ?>
	</table>
	


</div>

</body>
</html>
