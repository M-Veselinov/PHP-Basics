<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-24
 * Time: 12:37
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post">
        <input type="text" name="input" id="input">
        <input type="radio" name="action" value="1" id="1">
        <label for="1">Check Palindrome</label>
        <input type="radio" name="action" value="2" id="2">
        <label for="1">Reverse String</label>
        <input type="radio" name="action" value="3" id="3">
        <label for="1">Split</label>
        <input type="radio" name="action" value="4" id="4">
        <label for="1">Hash String</label>
        <input type="radio" name="action" value="5" id="5">
        <label for="1">Shuffle String</label>
        <input type="submit" name="submit">
    </form>
<?php
    if(isset($_POST['input'])){
        $string = $_POST['input'];
        $radio = $_POST['action'];
        if($radio == "1"){
            $reversed = strrev($string);
            if($reversed == $string){
                echo $string . "Is Palindrome!";
            }
            else {
                echo $string . "Is not Palindrome!";
            }
        }
        else if($radio == "2"){
            $reversed = strrev($string);
            echo $reversed;
        }
        else if($radio == "3"){
            for($i = 0;$i < strlen($string);$i++){
                echo $string[$i] . " ";
            }
        }
        else if ($radio == "4"){
            echo hash('sha1',$string);
        }
        else if ($radio == "5"){
            $shuffled = str_shuffle($string);
            echo $shuffled;
        }
    }
?>
</body>
</html>