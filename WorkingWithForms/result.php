<?php
include('CVGenerator.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <table>
        <tr>
            <th>Personal Information</th>
        </tr>
        <tr>
            <td>First Name</td>
            <td><?php echo $fname ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $lname ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><?php echo $phone ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $gender ?></td>
        </tr>
        <tr>
            <td>Birth Date</td>
            <td><?php echo $birthDate ?></td>
        </tr>
        <tr>
            <td>Nationality</td>
            <td><?php echo $nationality ?></td>
        </tr>
    </table>

    <table>
        <tr>
            <th>Last Work Position</th>
        </tr>
        <tr>
            <td>Company Name</td>
            <td><?php echo $companyName ?></td>
        </tr>
        <tr>
            <td>From</td>
            <td><?php echo $from ?></td>
        </tr>
        <tr>
            <td>To</td>
            <td><?php echo $to ?></td>
        </tr>
    </table>

    <table>
        <tr>
            <th>Computer Skills</th>
        </tr>
        <tr>
            <td>Programming Languages</td>
            <td>
                <table>
                    <tr>
                        <th>Language</th>
                        <th>Skill Level</th>
                    </tr>
                    <tr>
                        <td><?php echo $programLang ?></td>
                        <td><?php echo $level ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <th>Other Skills</th>
        </tr>
        <tr>
            <td>Languages</td>
            <td>
                <table>
                    <tr>
                        <th>Language</th>
                        <th>Comprehension</th>
                        <th>Reading</th>
                        <th>Writing</th>
                    </tr>
                    <tr>
                        <td><?php echo $languages ?></td>
                        <td><?php echo $comprehension ?></td>
                        <td><?php echo $reading ?></td>
                        <td><?php echo $writing ?></td>
                    </tr>
                    <tr>
                        <td>Driver's license</td>
                        <td><?php echo $category ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>