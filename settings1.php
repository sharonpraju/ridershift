<?php
/*
include 'db_connection.php';
$conn = OpenCon();
$x=1;

$sql = "SELECT id FROM cities_new WHERE name=''"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);
while ($row = $result->fetch_assoc()) {

    $id = $row['id'];
    

    echo $x."Item Found".$id."<br>";
        
    $sql_2 = "SELECT CONCAT(ct.name,', ',st.name) FROM cities ct,states st WHERE st.id=ct.state_id AND ct.id=$id"; 
    $result_2 = mysqli_query($conn, $sql_2);
    $row_2 = mysqli_fetch_assoc($result_2);
    $temp=$row_2["CONCAT(ct.name,', ',st.name)"];
    $tempx = str_replace("'", " ", $temp);
    echo $tempx;
    echo $conn->error;

    $sql_3 ="UPDATE cities_new SET name='$tempx' WHERE id=$id";
    $conn->query($sql_3);
    echo "Error: " . $sql_3 . "<br>" . $conn->error;
    $x++;

}

$conn->close();
*/
?>