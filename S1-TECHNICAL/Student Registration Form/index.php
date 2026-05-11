<?php
    $name = "Jose Paolo Ong";
    $address = "Road 123, Barangay Bagong Silangan";
    $age = "19";
    $email = "ongjosepaolo@gmail.com";
    $phoneno = "01234567890";
    $dob = "5/13/2006";
    $gender = "Male";

    $school = "FEU TECH";
    $course = "BSITWMA";
    $pob = "Quezon City";
    $lang = "Filipino & English";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Helvetica, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
        }
        h1 {
            text-align: center;
            display: block; 
            border-bottom: 2px solid #ffffff;
            padding-bottom: 10px; 
        }
        table {
            width: 700px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px #00000000);
            padding: 20px;
        }
        .card {
            border-radius: 10px;
        }
        ul {
            list-style: none; 
            padding: 0;
            margin: 0;
        }
        li {
            padding: 10px;
            border-bottom: 1px solid #ffffff;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>
                <h1>Student Form</h1>
                <h2>Personal Information</h2>
                <ul>
                    <li><span class="label">Name:</span> <?= $name ?></li>
                    <li><span class="label">Gender:</span> <?= $gender ?></li>
                    <li><span class="label">Age:</span> <?= $age ?></li>
                    <li><span class="label">Date of Birth:</span> <?= $dob ?></li>
                    <li><span class="label">Address:</span> <?= $address ?></li>
                    <li><span class="label">Email:</span> <?= $email ?></li>
                    <li><span class="label">Phone No.:</span> <?= $phoneno ?></li>
                </ul>
            </td>
            <td>
                <h2>Background Information</h2>
                <ul>
                    <li><span class="label">School:</span> <?= $school ?></li>
                    <li><span class="label">Course:</span> <?= $course ?></li>
                    <li><span class="label">Place of Birth:</span> <?= $pob ?></li>
                    <li><span class="label">Languages:</span> <?= $lang ?></li>
                </ul>
            </td>
        </tr>
    </table>
</body>
</html>