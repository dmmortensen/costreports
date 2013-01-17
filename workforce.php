<?php
	//include header functions
	include('functions/header.php');
	
	//multi dimensional array to hold the coordinates of the lookup fields
	$workforceArray = array();
	
	//query to return the coordinates
	$workforceQuery = mysql_query("SELECT * FROM worksheet_reference WHERE category = 'workforce'");
	
	//counter for array
	$i=0;
	
	while($row = mysql_fetch_array($workforceQuery)){
		//add data to array and increment counter
		$workforceArray[$i] = array($row['WKSHT_CD'], $row['LINE_NUM'],$row['CLMN_NUM']);
		$i++;
		
		$innerQuery = mysql_query("SELECT * FROM 2552_10".substr($row['WKSHT_CD'],0,1)."");
		
		//step through and echo the description and values
		echo test;
		while($row2 = mysql_fetch_array($innerQuery)){
			echo $row2['description'] . ' = ' .$row2['ITM_VAL_NUM'];
		}
		?> 
		<div> 
			<?php echo $row['WKSHT_CD']; ?>
			<?php echo $row['LINE_NUM']; ?>
			<?php echo $row['CLMN_NUM']; ?> 
		</div> 
		<?php
	}
	
	print_r($workforceArray);
	
	include('functions/footer.php');
	
?>