<?php 

// Connect To Database
include 'includes/dbh.php';



// Show Data
$sql = "SELECT DATE_FORMAT(msg_time, '%H:%i%p') as time_msg,user,msg FROM shouts
;";

$result = mysqli_query($conn,$sql);

$resultChek = mysqli_num_rows($result);
