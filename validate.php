<?php
$validation=$_POST['validation'];
session_start();
//$user_id=$_SESSION['admin_id'];
$user_id=123;
include 'db_connection.php';
$conn = OpenCon();
$travel_type=$_POST['travel_type'];
$travel_status="started";
$travel_from=$_POST['travel_from'];
$travel_destination=$_POST['travel_destination'];
$travel_mode=$_POST['travel_mode'];
$vehicle_modal=$_POST['vehicle_modal'];
$vehicle_colour=$_POST['vehicle_colour'];
$vehicle_number=$_POST['vehicle_number'];

$lat_from=$_POST['lat_from'];
$long_from=$_POST['long_from'];
$lat_dest=$_POST['lat_dest'];
$long_dest=$_POST['long_dest'];
$tempx=($lat_dest-$lat_from);
$tempx=$tempx*$tempx;
$tempx1=($long_dest-$long_from);
$tempx1=$tempx1*$tempx1;
$tempx2=$tempx+$tempx1;

$travel_distance=sqrt($tempx2);

$inter_point_1=$_POST['inter_point_1'];
$inter_point_2=$_POST['inter_point_2'];
$inter_point_3=$_POST['inter_point_3'];
$inter_point_4=$_POST['inter_point_4'];
$inter_point_5=$_POST['inter_point_5'];

$sql="INSERT INTO travel_logs(user_id, travel_type, travel_mode, travel_from, travel_destination, travel_distance, inter_point_1, inter_point_2, inter_point_3, inter_point_4, inter_point_5, vehicle_modal, vehicle_colour, vehicle_number)
VALUES ($user_id, '$travel_type', '$travel_mode', '$travel_from', '$travel_destination', '$travel_distance', '$inter_point_1', '$inter_point_2', '$inter_point_3', '$inter_point_4', '$inter_point_5', '$vehicle_modal', '$vehicle_colour', '$vehicle_number')";
if ($conn->query($sql) === TRUE)
{
    echo"1";
}
else
{
    echo $conn->error;
}
$conn->close();
?>