<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-22
 * Time: 17:07
 */
    $result = "<table><thead><tr><th>Name</th><th>Square</th></tr></thead>";
    $sum = 0;
    for($i = 0; $i <= 100 ; $i++) {
        if($i%2 == 0){
        $square =round(sqrt($i),2);
        $sum+=$square;
        $result .= "<tr><td>$i</td><td>$square</td></tr>";
        }
    }
    $result .= "<tr><td>Total:</td><td>$sum</td></tr></table>"
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
            width:20px;
            height:10px;
            border:1px solid black;
        }
    </style>
</head>
<body>
   <?php if(isset($result)){
       echo $result;
   }
    ?>
</body>
</html>