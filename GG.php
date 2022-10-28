<?php
require('session.php');
// require('dbconnect.php');
$event_id=$_SESSION['event_id'];
echo $event_id;
$sql = "SELECT *
FROM `event_payment_list`
WHERE `event_payment_list`.`event_id`='$event_id'";

$results =  $conn->query($sql);
$num = mysqli_num_rows($results);
echo $num;

$update="UPDATE events SET number_of_participants = '$num' WHERE events.event_id = $event_id";
mysqli_query( $conn,$update);
?>