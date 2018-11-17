<?php
function kebabize($string) {
    $res = str_split($string);
    foreach($res as $key =>$value){
        if($key==0){
            if(is_numeric($res[$key])){
                $res[$key] = '';
            }else{
            $res[$key] = strtolower($res[$key]);
            }
        }if(ctype_upper($res[$key])){
            $res[$key] = '-'.strtolower($res[$key]);
        }if(is_numeric($res[$key])){
            $res[$key] = '';
        }
    }
    var_dump($res);
    $resulat=implode('',$res);
    echo $resulat;
    $resfinal=str_split($resulat);
    
    if($resfinal[0]=='-'){
        $resfinal[0]='';
    }
    $re=implode('',$resfinal);
    var_dump($re);
    return $re;
}
kebabize("9B5kyeeU9");