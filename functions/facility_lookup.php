<?php
	if(isset($_GET['facility_num'])){
		
		
		$uri = $_SERVER["REQUEST_URI"];
		$recNum = NULL;
		
		//lookup the other facility information from the * table
		$rptQuery = mysql_query("SELECT * FROM rpt WHERE PRVDR_NUM = '".$facilityNum."' LIMIT 1");
		
		while($row = mysql_fetch_array($rptQuery)){
			echo 'REC NUM = '.$row['RPT_REC_NUM'];
			$recNum = $row['RPT_REC_NUM'];
		}
		
		/*
		 * Start by presenting the options available for data lookup
		 */
		
		$optionsQuery = mysql_query("SELECT * FROM analysis_categories;");
		
		while($row = mysql_fetch_array($optionsQuery)){?>
			<div><a href="<?php echo $row['category'] ?>.php?RPT_REC_NUM=<?php echo $recNum; ?>"><?php echo $row['description'] ?></a></div>
		<?php }
		
/*
		 $allDataQuery = mysql_query("SELECT * FROM 2552_10s WHERE RPT_REC_NUM = '".$recNum."' AND WKSHT_CD = 'S300001' AND LINE_NUM = '02700' AND CLMN_NUM = '0100' LIMIT 1");
		 //$allDataQuery = mysql_query("SELECT * FROM rpt_nmrc");
		 while($row = mysql_fetch_array($allDataQuery)){
		 	// if($row['RPT_REC_NUM'] == $recNum && $row['WKSHT_CD'] == 'S300001' && $row['LINE_NUM'] == '02700' && $row['CLMN_NUM'] == '0100'){		 		?><div>Employees on Payroll: <?php echo $row['ITM_VAL_NUM']; ?> </div><?php
			// }
		 }
		*/
	}//END IF isset facility_num
	
	if(isset($_GET['lookup'])){
		
	}
?>