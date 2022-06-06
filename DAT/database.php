<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "comics";
$connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if(!$connect){
   die('Could not Connect My Sql');
}
?>  