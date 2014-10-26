<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-12
 * Time: 19:19
 */
$firstNumber = 1.567808;
$secondNumber = 0.356;
$result = $firstNumber + $secondNumber;
$result = number_format($result,2);
echo '$firstNumber + $secondNumber = ' . "$firstNumber" . ' + ' . "$secondNumber" . ' = ' . "$result";