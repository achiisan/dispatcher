<?php
	include 'connect.php';
	$od =  $_POST['od'];
	$eta = $_POST['eta'];
	
	
	date('y-m-d', strtotime($eta));

     $result = mysqli_query($db, "INSERT INTO delivery (d_status, d_details, d_eta) VALUES ('ON REVIEW','".$od."','".$eta."' )") or die(mysqli_error($db));
    

?>