<?php
include 'podpis.php';
//připojí databázi
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "podpis";
$connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


$first = $_POST['jmeno'];
$last = $_POST['prijmeni'];
$date = $_POST['datum'];
//vloží do databáze
$insert = "INSERT INTO osoba (jmeno, prijmeni) VALUES ('$first', '$last');INSERT INTO certifikat (datum, idcertificate, sha1_key, hash_value) VALUES ('$date', '$id', '$key', '$hashed_file');";
mysqli_multi_query($connect, $insert);

header("Location: ../index.php");