<?php

function lookup($select, $table, $field, $whereParams){
	
	$masterQuery = mysql_query('SELECT '.$select.' FROM '.$table);
	
	$returnArray = array();
	
	$returnString = 'this works';
		
	while($row=mysql_fetch_array($masterQuery)){
		array_push($returnArray, $row[$field]);
	}
	
	foreach ($returnArray as $value) {
		?>
		<div>
		<?php
			echo $value;
		?>
		</div>
		<?php		
	}
	
	return $returnString;
}
?>