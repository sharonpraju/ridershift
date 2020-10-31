<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header("location:index.html");
}
?>
/*
include 'db_connection.php';
$conn = OpenCon();
$sql = "SELECT ct.id, ct.state_id, CONCAT(ct.name,', ',st.name) FROM cities ct,states st WHERE st.id=ct.state_id"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result); 
while ($row = $result->fetch_assoc()) {
    $temp=$row["CONCAT(ct.name,', ',st.name)"];
    $id = $row['id'];
    $state_id = $row['state_id'];
    $sql_1 ="INSERT INTO cities_new (id,name,state_id) VALUES ($id,'$temp',$state_id)";
    $conn->query($sql_1);
    echo $id."<br>";
   // $percentage=($x/48356)*100;
   // echo $percentage."<br><br>";
}
$conn->close();
*/
?>
