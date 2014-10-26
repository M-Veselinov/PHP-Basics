<?php
$input = '[["xx","a","a","a","a","a","a"],
        ["a","a","z","z","a","php","a"],
        ["a","a","x","x","a","a","a"],
        ["xx","a","sql","a","a","js","a"],
        ["xx","a","a","a","a","a","a"],
        ["xx","a","z","z","a","php","w"]]';
$height = json_decode($input);
$width = count($height[0]);

function solution($height){
    $n = count($height);
    if($n == 0){
        return 0;
    }
    for($row = 0;$row < count($matrix);$row++){
        for($col = 0;$col < count($matrix[$row]);$col++){

        }
    }
}