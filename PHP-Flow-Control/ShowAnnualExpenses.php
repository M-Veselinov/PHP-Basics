<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-23
 * Time: 10:48
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
        td,th {
            border:1px solid black;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="years">Enter Number of Years :</label>
        <input type="text" name="years" id="years">
        <input type="submit" value="Show costs" name="submit">
    </form>
    <?php
        if(isset($_POST['years'])){
            $years = $_POST['years'];
            $year = 2014;
            $sum = 0;
            $result = "<table><thead><tr><th>Year</th><th>January</th><th>February</th><th>March</th>
                        <th>April</th><th>May</th><th>June</th><th>July</th><th>August</th><th>September</th><th>October</th><th>November</th>
                            <th>December</th><th>Total:</th></tr></thead>";
            for($i = 0;$i < $years;$i++){
                $result .= "<tr><td>$year</td>";
                for($j = 0;$j < 12;$j++){
                    $expenses = rand(1,1000);
                    $sum += $expenses;
                    $result .=  "<td>$expenses</td>";
                }
                $result .= "<td>$sum</td></tr>";
                $sum = 0;
                $year--;
            }
            $result .= "</table>";
            echo $result;
        }
    ?>
</body>
</html>