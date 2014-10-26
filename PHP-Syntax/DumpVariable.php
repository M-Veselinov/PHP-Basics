<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-12
 * Time: 19:31
 */
$variable = (object)[2,34];
if(is_integer($variable) == true || is_double($variable) == true){
    var_dump($variable);
} else {
    echo gettype($variable);
}