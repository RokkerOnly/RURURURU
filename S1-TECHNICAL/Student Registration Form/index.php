<?php
    $name = "Jose Paolo Ong";
    $address = "Road 123, Barangay Bagong Silangan";
    $age = "19";
    $email = "ongjosepaolo@gmail.com";
    $phoneno = "01234567890";
    $dob = "5/13/2006";
    $gender = "Male";

    $school = "FEU Tech";
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
            border-bottom : 2px;
            pdding-bottom: 10px;
        }
        .card {
            border-radius: 10px;
        }
        ul {
            list-style: none; padding: 2px;
        }
        li {
            padding: 10px;
            border-bottom : 1px;
        }
    </style>
</head>
<body>
    <h1>Student Form</h1>
<ul>
    <h2>Personal Information</h2>
    <p> Name: <?= $name ?></p>
    <p> Gender: <?= $gender ?></p>
    <p> Age: <?= $age ?></p>
    <p> Date of Birth: <?= $dob ?></p>
    <p> Address: <?= $address ?></p>
    <p> Email: <?= $email ?></p>
    <p> Phone No.: <?= $phoneno ?></p>
</ul>
<ul>
    <h2>Background Information</h2>
    <p> School: <?= $school ?></p>
    <p> Course: <?= $course ?></p>
    <p> Place of Birth: <?= $pob ?></p>
    <p> Languages: <?= $lang ?></p>
</ul>

</body>
</html>