<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Result Colors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Your Favorite Colors</h2>

    <?php if (isset($_SESSION['colors'])): ?>
    <div class="colors-wrapper">
        <?php foreach ($_SESSION['colors'] as $color): ?>
        <div class="color-box" style="background-color: <?php echo $color; ?>;">
            <?php echo $color; ?>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <a href="FavoriteColor.php" class="back-btn">Go Back</a>
</div>

</body>
</html>
