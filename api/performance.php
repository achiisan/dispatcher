<?php
	include 'connect.php';

    $result = mysqli_query($db, "SELECT * FROM performance") or die(mysql_error());

    while($row=mysqli_fetch_array($result))
    $output[]=$row;
    print(json_encode($output));
    mysqli_close($db);

?>