<?php
mb_internal_encoding('UTF-8');

if ($_POST) {
    //data normalization
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phoneNumber'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['birthDate'];
    $nationality = $_POST['nationality'];
    $companyName = $_POST['companyName'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $programLang = $_POST['programLang'];
    $level = $_POST['level'];
    $languages = $_POST['languages'];
    $reading = $_POST['reading'];
    $comprehension = $_POST['comprehension'];
    $writing = $_POST['writing'];
    $category = $_POST['category'];

    if(empty($gender)){
        $gender = "Please enter gender";
    }
    if(empty($lname)){
        echo "Please enter last name";
    }
    if(empty($email)){
        echo "Please enter email";
    }
    if(empty($phone)){
        echo "Please enter phone number";
    }
    if(empty($gender)){
        echo "Please enter first name";
    }
    if(empty($fname)){
        echo "Please enter first name";
    }
}
?>