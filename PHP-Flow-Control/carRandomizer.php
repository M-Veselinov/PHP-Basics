<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-22
 * Time: 18:28
 */
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <style>
            table{
                border:1px solid black;
                border-collapse: collapse;
            }
            th,td {
                border:1px solid black;
            }
        </style>
    </head>
    <body>
    <form method="post">
        <label for="cars">Enter cars</label>
        <input type="text" name="cars" id="cars">
        <input type="submit" name="submit" value="Show result">
    </form>
    </body>
    </html>
<?php
if(isset($_POST['submit'])){
    $arr = explode(", ",$_POST['cars']);
    $colors = array('yellow', 'green', 'black', 'orange', 'blue');
    $counts = array(1,2,3,4,5);
    $result = "<table><thead><tr><th>Car</th><th>Color</th><th>Count</th></tr></thead>";
    foreach($arr as $value){
        $color = $colors[array_rand($colors)];
        $count = $counts[array_rand($counts)];
        $result .= "<tr><td>$value</td><td>$color</td><td>$count</td></tr>";
    }
    $result .= "</table>";
    echo $result;
}
?>