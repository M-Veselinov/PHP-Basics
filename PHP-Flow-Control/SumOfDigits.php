<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-23
 * Time: 19:51
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        table {
            border:1px solid black;
            border-collapse: collapse;
        }
        td {
            border:1px solid black;
        }
    </style>
</head>
<body>
    <form method="post">
    <label for="input">Input string:</label>
    <input type="text" name="input" id="input">
    <input type="submit" name="submite">
    </form>
<?php
    if(isset($_POST['input'])){
        $input = $_POST['input'];
        $arr = explode(", ",$input);
        $sum = 0;
        $result = "<table>";
        for($i = 0;$i < count($arr);$i++){
            $word =$arr[$i];
            if(ctype_alpha($word) == true) {
                $sum = "I cannot sum that";
            }
            else {
                for($j=0;$j < strlen($word);$j++){
                    $sum+=$word[$j];
                }
            }
            $result .= "<tr><td>$word</td><td>$sum</td></tr>";
            $sum = 0;
        }
        $result .= "</table>";
        echo $result;
    }
?>
</body>
</html>