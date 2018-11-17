<?php
// Examples: 
    //toCamelCase("the-stealth-warrior"); // returns "theStealthWarrior"
    //toCamelCase("The_Stealth_Warrior"); // returns "TheStealthWarrior"

 function toCamelCase($str){
    $strToArray=str_split($str);
    $caracter=array('-','_');
    foreach($strToArray as $key){        
            $res=str_replace($caracter,"",$strToArray);        
    }
    $resFinal=implode("",$res);
}
 toCamelCase("VFD-6FF_R");