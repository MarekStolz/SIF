<?php
$cryptArray = array( "a"=>"x",
"b"=>"h",
"c"=>"y",
"d"=>"z",
"f"=>"j",
"e"=>"v",
"g"=>"a",
"h"=>"b",
"i"=>"c",
"j"=>"d",
"k"=>"f",
"n"=>"r",
"m"=>"e",
"l"=>"i",
"o"=>"k",
"p"=>"n",
"s"=>"w",
"r"=>"s",
"t"=>"m",
"u"=>"l",
"v"=>"o",
"w"=>"p",
"x"=>"q",
"y"=>"t",
""=>"1",
"z"=>"u");

$string = "marekjefrajer";
echo"$string";

function cryptit($string,$cryptArray){    
   
    $temp = "";     

    $length = strlen($string);       
   
    for($i=0; $i<$length; $i++){       
      
        $temp .= $cryptArray[$string[$i]];
    }
   
    return $temp;

} 

function decryptit($string,$cryptArray){
    $temp = "";
    $length = strlen($string);    
   
    $cryptArray = array_flip($cryptArray);     
   
    for($i =0; $i<$length; $i = $i+3){       
        $temp .= $cryptArray[$string[$i+3]];
    }
    return $temp;
}

$crypted =  cryptit($string,$cryptArray);
echo " = $crypted";

$decrypted = decryptit($crypted,$cryptArray);
echo $decrypted;     
    ?>