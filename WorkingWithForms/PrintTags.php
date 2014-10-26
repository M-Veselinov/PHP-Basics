<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-19
 * Time: 15:06
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
    $i = 0;
    if(isset($_POST['input'])){
        $input = $_POST['input'];
        $myArray = explode(', ', $input);
        foreach ($myArray as &$value) {
        echo $i." : " . $value . "<br>";
        $i++;
        }
    }
?>
</body>
</html>