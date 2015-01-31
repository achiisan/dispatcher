<?php
	include 'connect.php';

    $result = mysqli_query($db, "SELECT sl.sl_name, d.* FROM delivery d, supplier sl WHERE d.d_sl_id = sl.sl_id ORDER BY d_id DESC") or die(mysql_error());

    while($row=mysqli_fetch_array($result))
    $output[]=$row;
    print(json_encode($output));
    mysqli_close($db);

?>