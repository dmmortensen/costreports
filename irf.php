<?php
	
	//include header functions
	include('functions/header.php');
	
	//multi dimensional array to hold the coordinates of the lookup fields
	$irfArray = array();
	
	//query to return the coordinates
	$irfQuery = mysql_query("SELECT * FROM worksheet_reference WHERE category = 'irf'");
	
	while($row = mysql_fetch_array($irfQuery)){
		
		$innerQuery = mysql_query("SELECT ITM_VAL_NUM FROM 2552_10".substr($row['WKSHT_CD'],0,1)." WHERE WKSHT_CD LIKE'".$row['WKSHT_CD']."' AND LINE_NUM ='".$row['LINE_NUM']."' AND CLMN_NUM ='".$row['CLMN_NUM']."' AND RPT_REC_NUM ='".$getRecNum."' LIMIT 1;");
		//echo "SELECT * FROM 2552_10".substr($row['WKSHT_CD'],0,1)." WHERE WKSHT_CD LIKE'".$row['WKSHT_CD']."' AND LINE_NUM ='".$row['LINE_NUM']."' AND CLMN_NUM ='".$row['CLMN_NUM']."' AND RPT_REC_NUM ='".$getRecNum."' LIMIT 1;";
		//step through and echo the description and valuesadfasf
		 while($row2 = mysql_fetch_array($innerQuery)){
		 	?>
		 	<div>
		 	<?php echo $row['description'] . ' = ' .$row2['ITM_VAL_NUM']; ?>
			</div>
		<?php }
	}
	//test comment for desktop verifications
	include('functions/footer.php');

?>