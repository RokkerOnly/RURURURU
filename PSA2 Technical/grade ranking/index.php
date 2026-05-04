<?php
    $name = "Juan Dela Cruz";
    $grade = 58;

    if ($grade >= 93) {
        $rank = "A";
    } elseif ($grade >= 90) {
        $rank = "A-";
    } elseif ($grade >= 87) {
        $rank = "B+";
    } elseif ($grade >= 83) {
        $rank = "B";
    } elseif ($grade >= 80) {
        $rank = "B-";
    } elseif ($grade >= 73) {
        $rank = "C+";
    } elseif ($grade >= 70) {
        $rank = "C";
    } elseif ($grade >= 67) {
        $rank = "D+";
    } elseif ($grade >= 63) {
        $rank = "D";
    } elseif ($grade >= 60) {
        $rank = "D-";
    } elseif ($grade <= 59 ) {
        $rank = "F";
    } 
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Ranker</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .card {
            border: 2px solid green;
            width: 500px;
            padding: 20px;
        }
        .name-box {
            border: 2px solid green;
            padding: 10px;
            width: 300px;
            margin-bottom: 20px;
        }
        .boxes {
            display: flex;
            gap: 10px;
        }
        .box {
            border: 2px solid green;
            width: 120px;
            height: 100px;
            text-align: center;
            padding: 10px;
        }
        .image-container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="card">
    <div class="name-box">Name: <?php echo $name; ?></div>
    <div class="boxes">
        <div class="box">Rank: <br><br> <?php echo $rank; ?></div>
        <div class="box">Grade: <br><br> <?php echo $grade; ?></div>
        <div class="box">
            <div class="image-container">
                <img src="Photo-With-A-Suit.png" alt="Picture">
            </div>
        </div>
    </div>
</div>
</body>
</html>