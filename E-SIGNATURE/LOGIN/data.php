<?php
include 'connect.php';
include 'podpis.php';

$first = $_POST['jmeno'];
$last = $_POST['prijmeni'];
$date = $_POST['datum'];

$insert = "INSERT INTO osoba (jmeno, prijmeni) VALUES ('$first', '$last');INSERT INTO certifakt (datum, idcertificate, md5_key, hash_value) VALUES ('$date', '$id', '$key', '$hashed_file');";
mysqli_multi_query($connect, $insert);

header("Location: ../index.php");