<?php
    $json = file_get_contents('json/shop.json');
    $json = json_decode($json);
    $arr = array();
    for($i=0;$i<count($json);$i++){
        array_push($arr,"<div>");
        foreach($json[$i] as $key=>$value){
            array_push($arr,"<span>$key</span>");   
            array_push($arr,"<span>$value</span>"); 
        }
        array_push($arr,"</div>");
    }
    echo join($arr);
?>