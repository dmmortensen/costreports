<?php
	
	
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
	/* Connect to to MYSQL database */	
	mysql_select_db("costreports", $con);
	
	if(isset($_GET['facility_num']))
		$facilityNum = $_GET['facility_num'];
	
	

?>