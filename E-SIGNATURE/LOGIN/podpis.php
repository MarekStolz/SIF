<?php
include '/connect.php';

$id = sha1(uniqid(rand()));
$key = sha1(uniqid(rand()));

$file_content = file_get_contents("data.txt");
$hashed_file = hash('sha512', $file_content);

$encryptedHash = openssl_encrypt($hashed_file, 'blowfish', $key, $options=0);

$signed = $file_content.'###'.$id.'###'.$encryptedHash;

$stream = fopen('data.txt', 'w');
fwrite($stream, $signed);
fclose($stream);

?>