<?php
$name = $_GET['name'];
$gender = $_GET['gender'];
$pin = $_GET['pin'];
$pin = str_split($pin);
$isValid = true;
$result = "";
$year = 0;
if(count($pin) != 10){
    $isValid = false;
}
if($pin[2] == "1"){
    $year = "19" . $pin[0] . $pin[0];
    $year = intval($year);
} else if($pin[2] == "3"){
    $year = "18" . $pin[0] . $pin[0];
    $year = intval($year);
} else if($pin[2] == "5"){
    $year = "20" . $pin[0] . $pin[0];
    $year = intval($year);
}
if(($pin[2] == "1" || $pin[2] == "3" || $pin[2] == "5") && $pin[3] > 2){
    $isValid = false;
}
if($pin[2] == "1"){
    $month = $pin[2] . $pin[3];
} else if ($pin[2] == "3"){
    $month = ($pin[2] - 2) . $pin[3];
} else if ($pin[2] == "5"){
    $month = ($pin[2] - 4) . $pin[3];
} else if ($pin[2] == "0"){
    $month = $pin[3];
}

$day = intval($pin[4] . $pin[5]);
$monthDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
if($day > $monthDays){
    $isValid = false;
}
$genderNum = $pin[8];
if($genderNum % 2 == 0 && $gender = "male"){
    $gender = "male";
} else if($genderNum % 2 != 0 && $gender = "female"){
    $gender = "female";
} else {
    $isValid = false;
}
$checkSum = 0;
$check =0;
$checkSum += $pin[0] * 2;
$checkSum += $pin[1] * 4;
$checkSum += $pin[2] * 8;
$checkSum += $pin[3] * 5;
$checkSum += $pin[4] * 10;
$checkSum += $pin[5] * 9;
$checkSum += $pin[6] * 7;
$checkSum += $pin[7] * 3;
$checkSum += $pin[8] * 6;
$check = $checkSum % 11;
if($check == 10){
    $check = 0;
}
if($check == 0){
    $isValid = false;
}
$pin = implode($pin);
if($isValid == true){
    $result = array("name" => $name, "gender" => $gender, "pin" => $pin);
    echo(json_encode($result));
}else {
    $result = "<h2>Incorrect data</h2>";
    echo $result;
}