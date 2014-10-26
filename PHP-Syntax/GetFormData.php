<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post">
        <input type = "text" name = "name">
        <br>
        <input type = "text" name = "age" >
        <br>
        <input type = "radio" value = "Male" name="gender" id = "male">
        <label for="male">Male</label>
        <br>
        <input type = "radio" value = "Female" name="gender" id = "female">
        <label for="female">Female</label>
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-16
 * Time: 12:55
 */
if(isset($_POST["submit"])){
    $selected_radio = $_POST["gender"];
    $name = $_POST["name"];
    $age = (int)$_POST["age"];
    echo 'My name is ' . $name . '. I am ' . $age . ' years old. I am ' . $selected_radio;
}