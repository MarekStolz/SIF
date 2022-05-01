<!DOCTYPE html>
<html lang="cz">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
  
    $text = "Marek je frajer";
    $key = "marek";
//sifrovani
    $cipher = "AES-128-CTR";  
    $iv_length = openssl_cipher_iv_length($cipher);
    $options = 0;
      
    $iv = '1234567891011121';
    
    $encryption = openssl_encrypt($text, $cipher,
                $key, $options, $iv);
      
    echo "Zašifrováný text: " . $encryption . "<br>";


//rozsifrovani
    $decryption=openssl_decrypt ($encryption, $cipher, 
            $key, $options, $iv);
      
   
    echo "Rozšifrováný text: " . $decryption;
      
    ?>
</body>

</html>