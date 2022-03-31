<?php
include '/connect.php';

$id = md5(uniqid(rand()));

$key = md5(uniqid(rand()));

$file_content = file_get_contents("data.txt");
$hashed_file = hash('sha256', $file_content);

$encryptedHash = openssl_encrypt($hashed_file, 'blowfish', $key, $options=0);

$signed = $file_content.'###'.$id.'###'.$encryptedHash;

$stream = fopen('data.txt', 'w');
fwrite($stream, $signed);
fclose($stream);

?>