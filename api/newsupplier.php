<?php
	include 'connect.php';
	$sl_name =  $_POST['sl_name'];
	$sl_address = $_POST['sl_address'];
	


     $result = mysqli_query($db, "INSERT INTO supplier (sl_name, sl_address) VALUES ('".$sl_name."','".$sl_address."' )") or die(mysqli_error($db));
    

?>