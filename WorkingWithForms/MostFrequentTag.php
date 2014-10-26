<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-19
 * Time: 17:41
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Print Tags</title>
</head>
<body>
<form method="post">
    <label for="input">Enter Tags:</label>
    <br>
    <input type="text" id="input" name="input">
    <input type="submit">
</form>
<?php
$counter = 1;
$mostFrqt = "";
$count = 0;
$word = "";
$secondWord = "";
if(isset($_POST['input'])){
    $input = $_POST['input'];
    $myArray = explode(', ', $input);
    foreach ($myArray as $value) {
        if($word != $value){
            $counter = 1;
        }
        else{
            $counter++;
            $word = "";
        }
        if($counter > $count){
            $count = $counter;
            $mostFrqt = $value;
        }
        $word = $value;

        echo $value . " : $counter times" . "<br>";
    }
    echo "Most Frequent Tag is :  $mostFrqt";
}
?>
</body>
</html>