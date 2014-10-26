<?php
//Write a program that finds in given array of integers
//a sequence of given sum S (if present).
//Example:	 {4, 3, 1, 4, 2, 5, 8}, S=11  {4, 2, 5}
$arr = array(4, 3, 1, 4, 2, 5, 8,9,15,20,5);
$newArr = [];
$sum = 0;
$s = 26;
for($i = 0;$i < count($arr);$i++){
    $sum += $arr[$i];
    if($sum > $s){
        $sum = $arr[$i];
    }
    if($sum == $s){
        $position = $i;
        $innerSum = 0;
        $j=0;
        while($innerSum != $s){
            $newArr[$j] = $arr[$position];
            $innerSum += $arr[$position];
            $position--;
            $j++;
        }
    }
}
array_reverse($newArr);
var_dump($newArr);