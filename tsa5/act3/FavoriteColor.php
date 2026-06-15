<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $_SESSION['colors'] = [
        $_POST['color1'],
        $_POST['color2'],
        $_POST['color3'],
        $_POST['color4'],
        $_POST['color5'],
    ];
    header("Location: ResultColors.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>My 5 Favorite Colors</h2>
    <form method="POST" action="">
        <table>
            <tr><td>Color 1:</td><td><input type="text" name="color1"></td></tr>
            <tr><td>Color 2:</td><td><input type="text" name="color2"></td></tr>
            <tr><td>Color 3:</td><td><input type="text" name="color3"></td></tr>
            <tr><td>Color 4:</td><td><input type="text" name="color4"></td></tr>
            <tr><td>Color 5:</td><td><input type="text" name="color5"></td></tr>
            <tr><td colspan="2"><input type="submit" name="submit" value="Send Colors"></td></tr>
        </table>
    </form>
</div>

</body>
</html>