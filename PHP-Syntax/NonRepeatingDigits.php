<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-13
 * Time: 15:56
 */
global $n;
$n = 1234;
$str = (string)$n;
$length = strlen($str);
$a = substr($str,1,1);
if ($length < 3){
    echo 'no';
}
else {
    for($i = 102;$i <= $n;$i++){
        $iStr = (string)$i;
        $firstDigit = substr($iStr,0,1);
        $secondDigit = substr($iStr,1,1);
        $thirdDigit = substr($iStr,2,1);
        if(strlen($iStr) > 3){
            break;
        }
        if($firstDigit != $secondDigit && $firstDigit != $thirdDigit && $secondDigit != $thirdDigit){
            echo $i . "\n";
        }
    }
}