<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-25
 * Time: 13:04
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        .red {
            color:red;
        }
        .blue {
            color:blue;
        }
    </style>
</head>
<body>
    <form method="post">
        <textarea name="input"></textarea>
        <input type="submit">
    </form>
    <?php
    if(isset($_POST['input'])){
    $input = $_POST['input'];
    $words = preg_split("/[\s]/",$input);
    }
    ?>
    <?php
    foreach($words as $word){
        for($i = 0;$i < strlen($word);$i++){
            $char = $word[$i];
            $asciiValue = ord($char);
            if($asciiValue % 2 == 0){
                echo '<span class="red">' . "$char" . '</span>' . " ";
            } else if ($asciiValue % 2 != 0){
                echo '<span class="blue">'. "$char" . "</span>" . " ";
            }
        }
    }
    ?>
</body>
</html>