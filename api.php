<<<<<<< HEAD
<?php 
 
if(isset($_GET["number"],$_GET["message"])){ 
     
 
    $num = $_GET["number"]; 
    $msg = urlencode($_GET["message"]);  
 
    // $num = ltrim($num1, '0');  //to remove 0 from 11 digit number 
    $url = "http://api.termuxcommand.xyz/custom_sms.php?number=" . $num . "&message=" . $msg;  
 
 
    $curl = curl_init(); 
    curl_setopt($curl, CURLOPT_URL, $url); 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); 
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
    $resp = curl_exec($curl); 
    curl_close($curl); 
 
 
    echo $resp; 
 
}else{ 
    echo '🤔🤔🤔'; 
}
=======
<?php 
 
if(isset($_GET["number"],$_GET["message"])){ 
     
 
    $num = $_GET["number"]; 
    $msg = urlencode($_GET["message"]);  
 
    // $num = ltrim($num1, '0');  //to remove 0 from 11 digit number 
    $url = "http://api.termuxcommand.xyz/custom_sms.php?number=" . $num . "&message=" . $msg;  
 
 
    $curl = curl_init(); 
    curl_setopt($curl, CURLOPT_URL, $url); 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); 
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
    $resp = curl_exec($curl); 
    curl_close($curl); 
 
 
    echo $resp; 
 
}else{ 
    echo '🤔🤔🤔'; 
}
>>>>>>> b51d51f0f6716211f73b44867daefbbe8b50276e
