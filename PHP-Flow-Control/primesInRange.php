<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-23
 * Time: 14:38
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post">
        <label for="start">Starting index:</label>
        <input type="text" name="start" id="start">
        <label for="end">End:</label>
        <input type="text" name="end" id="end">
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $start = $_POST['start'];
            $end = $_POST['end'];

            for($i = $start;$i < $end;$i++){
                $isPrime = true;
                if($i % 2 == 0 && $i != 2){
                    $isPrime = false;
                }
                for($j = 2;$j <= round(sqrt($i));$j++){
                    if($i % $j == 0){
                        $isPrime = false;
                    }
                }
                if($isPrime == true){
                    echo "<b><i>$i</i></b>" . " ";
                }
                else if($isPrime == false){
                    echo $i . " ";
                }
            }
        }
    ?>
</body>
</html>