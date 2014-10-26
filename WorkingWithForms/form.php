<?php
    include "CVGenerator.php";
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Personal Information</legend>
            <input type="text" name="fname" placeholder="First Name">
            <input type="text" name="lname" placeholder="Last Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="phoneNumber" placeholder="Phone Number">
            <br>
            <label for="female">Female</label>
            <input type="radio" value="Female" id="female" name="gender">
            <label for="male">Male</label>
            <input type="radio" value="Male" id="male" name="gender">
            <br>
            <label for="birth-date">Birth Date</label>
            <br>
            <input type="date" name="birthDate" id="birth-date">
            <p>Nationality</p>
            <select name="nationality">
                <option>Bulgarian</option>
                <option>English</option>
                <option>Germany</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>Last Work Position</legend>
            <label for="company-name">Company Name</label>
            <input type="text" id="company-name" name="companyName">
            <br>
            <label for="from">From</label>
            <input type="date" name="from" id="from">
            <br>
            <label for="to">To</label>
            <input type="date" name="to" id="to">
        </fieldset>
        <fieldset>
            <legend>Computer Skills</legend>
            <label for="program-lang">Programming Languages</label>
            <br>
            <input type="text" name="programLang" id="program-lang">
            <select name="level">
                <option>Beginner</option>
                <option>Advanced</option>
                <option>Professional</option>
            </select>
            <br>
            <button>Remove Language</button>
            <button>Add Language</button>
        </fieldset>
        <fieldset>
            <legend>Other Skills</legend>
            <label for="languages">Languages</label>
            <input type="text" id="languages" name="languages">
            <select name="comprehension">
                <option>Comprehension</option>
                <option>Low</option>
                <option>Average</option>
                <option>Good</option>
                <option>Excellent</option>
            </select>
            <select name="reading">
                <option>-Reading</option>
                <option>Low</option>
                <option>Average</option>
                <option>Good</option>
                <option>Excellent</option>
            </select>
            <select name="writing">
                <option>-Writing</option>
                <option>Low</option>
                <option>Average</option>
                <option>Good</option>
                <option>Excellent</option>
            </select>
            <br>
            <button>Remove Language</button>
            <button>Add Language</button>
            <br>
            <p>Driver's License</p>
            <label for="B">B</label>
            <input type="radio" value="B" name="category" id="B">
            <label for="A">A</label>
            <input type="radio" value="A" name="category" id="A">
            <label for="C">C</label>
            <input type="radio" value="C" name="category" id="C">
        </fieldset>
        <input type="submit" name="submit">
    </form>
</body>
</html>