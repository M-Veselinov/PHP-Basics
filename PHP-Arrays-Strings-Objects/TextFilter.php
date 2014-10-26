<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-25
 * Time: 23:20
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="post">
    <label for="input">Text:</label>
    <textarea name="input" id="input"></textarea>
    <label for="banList">Ban List:</label>
    <input type="text" name="banList" id="banList">
    <input type="submit">
</form>
<?php
    if(isset($_POST['input']) && isset($_POST['banList'])) {
    $input = $_POST['input'];
    $banWords = $_POST['banList'];
    $banWords = explode(", ",$banWords);
    for($j = 0;$j < count($banWords);$j++){
        while (strpos($input,$banWords[$j]) == true){
            $position = strpos($input,$banWords[$j]);
            $word = substr($input,$position,strlen($banWords[$j]));
            for($i = 0;$i < strlen($word);$i++){
                $input[$position] = "*";
                $position++;
            }
        }
    }
    echo $input;
    }
?>
</body>
</html>