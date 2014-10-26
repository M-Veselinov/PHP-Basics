<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post">
        <textarea name="input"></textarea>
        <input type="text" name="match">
        <input type="submit" name="submit">
    </form>
<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-27
 * Time: 18:44
 */
if(isset($_POST['submit'])){
    $input = $_POST['input'];
    $input = preg_split('/[\.\!\?]/',$input);
    $match = $_POST['match'];
    $word = $input[count($input)-1];
    $bool = false;
    if(ctype_alpha($word[strlen($word)-1])){
        echo false;
    }
        for($i = 0;$i < count($input);$i++){
        $word = $input[$i];
        if(ctype_alpha($word[strlen($word)-1])){
            $word = explode(" ",$word);
            for($j = 0;$j < count($word);$j++){
                if($word[$j] == $match){
                    $bool = true;
                }
            }
        }
        if($bool == true){
             echo $input[$i] . "<br>";
        }
        $bool = false;
    }
}
?>
</body>
</html>
