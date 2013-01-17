<?php
	//include header functions
	include('functions/header.php');
	
	//multi dimensional array to hold the coordinates of the lookup fields
	$workforceArray = array();
	
	//query to return the coordinates
	$workforceQuery = mysql_query("SELECT * FROM worksheet_reference WHERE category = 'workforce'");
	
	while($row = mysql_fetch_array($workforceQuery)){
		
		$innerQuery = mysql_query("SELECT * FROM 2552_10".substr($row['WKSHT_CD'],0,1)." WHERE WKSHT_CD ='".$row['WKSHT_CD']."' AND LINE_NUM ='".$row['LINE_NUM']."' AND CLMN_NUM ='".$row['CLMN_NUM']."' AND RPT_REC_NUM ='".$getRecNum."' LIMIT 1;");
		
		//step through and echo the description and valuesadfasf
		 while($row2 = mysql_fetch_array($innerQuery)){
		 	?>
		 	<div>
		 	<?php
			echo $row['description'] . ' = ' .$row2['ITM_VAL_NUM'];
			?>
			</div>
			<?php
		}	}
	
	include('functions/footer.php');
	
?>