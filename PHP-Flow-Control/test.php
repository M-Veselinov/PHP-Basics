<?php
$arr = array('1111','2222','3333','4444');
$sum = 0;
for($i = 0;$i < count($arr);$i++){
    $word =$arr[$i];
    for($j=0;$j < strlen($word);$j++){
        $sum+=intval($word[$j]);
    }
    echo $sum;
    $sum = 0;
}
?>