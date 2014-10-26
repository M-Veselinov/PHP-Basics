<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-20
 * Time: 16:17
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post">
        <label for="amount">Enter Amount</label>
        <input type="text" name="amount" id="amount">
        <br>
        <input type="radio" name="currency" value="USD" id="USD">
        <label for="USD">USD</label>
        <input type="radio" name="currency" value="EUR" id="EUR">
        <label for="EUR">EUR</label>
        <input type="radio" name="currency" value="BGN" id="BGN">
        <label for="BGN">BGN</label>
        <br>
        <label for="compound-interest">Compound Interest Amount</label>
        <input type="text" name="compound-interest" id="compound-interest">
        <br>
        <select name="period">
            <option>6 Months</option>
            <option>1 Year</option>
            <option>2 Years</option>
            <option>5 Years</option>
        </select>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $amount = $_POST['amount'];
    $currency = $_POST['currency'];
    $compoundInterest = $_POST['compound-interest'];
    $period = $_POST['period'];
    $periodInMonths = 0;
    $sign = '';
    $monthInterest = $compoundInterest / 12;
    $result = $amount;
    switch($period){
        case "6 Months": $periodInMonths = 6; break;
        case "1 Year": $periodInMonths = 12; break;
        case "2 Years": $periodInMonths = 24; break;
        case "5 Years": $periodInMonths = 5 *12; break;
    }
    for($i = 0;$i < $periodInMonths;$i++){
        $result+= ($monthInterest / 100) * $result;
    }
    switch($currency){
        case "USD": $sign = '$'; break;
        case "EUR": $sign = "&euro;"; break;
        case "BGN": $sign = ''; break;
    }
    $result = round($result,2);
    echo " $sign $result";
}
?>