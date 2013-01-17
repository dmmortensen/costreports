<?php

	include('functions/header.php');
	
	
	
	?>
	
	<div>Pick your facility:</div>
	<div>
		<form method="GET">
			<select name="facility_num">
				<?php $hospitalQuery = mysql_query("SELECT * FROM providers ORDER BY hospital_name;"); ?>
				<?php while($row = mysql_fetch_array($hospitalQuery)){ ?>
					<option value="<?php echo $row['provider_number']; ?>"><?php echo $row['hospital_name']; ?></option>
				<?php } ?>
			</select>
			<button>Look Up</button>
		</form>
	</div>
	
	<div>Search for your facility:</div>
	<div>
		<form method="GET">
			<input type="text" name="hospital_name_search" />
			<button>Look Up</button>
		</form>
	</div>
	
	<?php
	
	include("/functions/facility_lookup.php");
	include("functions/footer.php");


?>