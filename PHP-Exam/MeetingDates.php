<?php
$startDateText = $_GET['dateOne'];
$endDateText = $_GET['dateTwo'];
$day = "Thursday";
FindDayInRange($startDateText,$endDateText,$day);
function FindDayInRange($startDateText,$endDateText,$day){
    $result = "<ol>\n";
    $bool = false;

    $startDateText = preg_split('/\-/',$startDateText);
    $startDay = intval($startDateText[0]);
    $startMonth = intval($startDateText[1]);
    $startYear = intval($startDateText[2]);

    $endDateText = preg_split('/\-/',$endDateText);
    $endDay = intval($endDateText[0]);
    $endMonth = intval($endDateText[1]);
    $endYear = intval($endDateText[2]);

    while($startDay != $endDay || $startMonth != $endMonth || $startYear != $endYear){
        if($startDay < $endDay)
        $currentDay = date("l",mktime(0, 0, 0, $startMonth, $startDay, $startYear));
        $monthDays = cal_days_in_month(CAL_GREGORIAN, $startMonth, $startYear);
        if($currentDay == $day){
            $result .= "<li>". date("d-m-Y",mktime(0, 0, 0, $startMonth, $startDay, $startYear)) . "</li>\n";
            $bool = true;
        }
        if($startDay > $monthDays){
            $startDay =0;
            $startMonth++;
        }
        if($startMonth > 12){
            $startMonth =0;
            $startYear++;
        }
        $startDay++;
    }
    $result .= "</ol>";
    if($bool == false){
        $result = "<h2>No " .$day. "s"."</h2>";
    }
    echo $result;
}