<?php
	include 'connect.php';
	$id = $_GET['d_id'];
	$query = "UPDATE delivery SET d_status = 'DISPATCHED', d_startdate = NOW() WHERE d_id = ".$id;
	//echo $query;
	$result = mysqli_query($db, $query);



?>