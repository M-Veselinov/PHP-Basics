<?php
$recipientText = $_GET['recipient'];
$subjectText = $_GET['subject'];
$bodyText = $_GET['body'];
$key = $_GET['key'];
$recipient = htmlspecialchars($recipientText);
$subject = htmlspecialchars($subjectText);
$body = htmlspecialchars($bodyText);
$formatted = "<p class='recipient'>$recipient</p><p class='subject'>$subject</p><p class='message'>$body</p>";
$result = "|";
$j = 0;;
for($i = 0;$i < strlen($formatted);$i++){
    $textCharASCII = ord($formatted[$i]);
    $keyCharASCII = ord($key[$j]);
    $newChar = $textCharASCII * $keyCharASCII;
    $newChar = dechex($newChar);
    $j++;
    if($j == strlen($key)){
        $j = 0;
    }
    $result .= $newChar;
    $result .= "|";
}
echo $result;
?>

