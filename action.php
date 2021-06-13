<?php


if(isset($_POST['encrypt'])){

    $simple_string = $_POST['text'];
    echo "Original Input Data :" . $simple_string;
    echo "<br>";  

    $ciphering = "AES-128-CTR"; // stores the cipher method
    $option = 0;// flag
    $encryption_iv = '1234567890123456'; // initialization vector  
    $encryption_key = "hello";
    $encryption = openssl_encrypt($simple_string,$ciphering,$encryption_key,$option,$encryption_iv);
    echo "The Encrypted Data is : " .$encryption; // output message
    echo "<br>";
}

if(isset($_POST['decrypt'])){
    
     $text = $_POST['text'];
     $ciphering = "AES-128-CTR"; // stores the cipher method
     $option = 0;// flag
     $decryption_key = "hello";
     $decryption_iv = "1234567890123456"; // initialization vector
     
     $decryption = openssl_decrypt($text,$ciphering,$decryption_key,$option,$decryption_iv);
     echo "The Encrypted Data is : " .$decryption; //output message
     echo "<br>";


}





?>