<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "your_user";
 $dbpass = "";
 $db = "ridershift";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
