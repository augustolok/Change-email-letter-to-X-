<?php
// Your code here!

$str = "augusto@live.com";
$arr1 = str_split($str);
$final = strpos($str,"@");
$conta = 0;
$letras = 0;
$depoisarroba=40000;
$varinv= strrev($str);
$valorin =strpos($varinv,".");
$valorin=$valorin+1;
$varin= substr($varinv,0, $valorin);
$varin = strrev($varin);
$arr2 = str_split($varinv);
$letras= count($arr1);
$letras = $letras -1;
$letras= $letras - $valorin;
foreach ($arr1 as $value) {
    if($conta<$final){
        if(3>$conta){
            echo $value;  
        }
        else{
             echo "X";
        }
     
    }
    if($value === "@"){
        echo "@";
        $depoisarroba = $conta;
    
        
    }
    if($depoisarroba<$conta && $letras>=$conta){
        if($value ==="."){
            echo ".";
        }
        else{
       echo "X";  }
    }
    if($letras<$conta){
        echo $value;
    }
   
    
    $conta++;
    
    // code...
}
$conta = 0;


?>
