<?php 
//You will be given a number and you will need to return it as a string in 
/*
expanded_form(12); // Should return "10 + 2"
expanded_form(42); // Should return "40 + 2"
expanded_form(70304); // Should return "70000 + 300 + 4"*/

function expanded_form(int $n) {
    // Get string value of a variable
    $a=strval($n);
    // Convert string to  array;
    $tab = str_split($a);
    $longueurTab= sizeof($tab);
    for($i=0,$j=$longueurTab-1;$i<$longueurTab;$i++,$j--){
        $tab[$i] = intval($tab[$i])*pow(10,$j);
    }
    // delete 0 numbers
    foreach (array_keys($tab, 0) as $key) {
        unset($tab[$key]);
    }
    //var_dump($tab,"no");
    $res = implode(" + ",$tab);
    //var_dump($res,"no");
    return $res;
  }
  expanded_form(70304);