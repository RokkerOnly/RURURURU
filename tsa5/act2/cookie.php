<?php
if ($_SERVER["REQUEST_METHOD"] = "POST" &&isset($_POST['submit'])) {
    setcookie("firstname", $_POST['firstname'], time() + 10, "/");
    setcookie("middlename", $_POST['middlename'], time() + 20, "/");
    setcookie("lastname", $_POST['lastname'], time() + 30, "/");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Cookie</h2>
        <form action="" method="post">
            <table>
                <tr><td>First Name:</td><td><input type="text" name="firstname"></td></tr>
                <tr><td>Middle Name:</td><td><input type="text" name="middlename"></td></tr>
                <tr><td>Last Name:</td><td><input type="text" name="lastname"></td></tr>
                <tr><td colspan="2"><input type="submit" name="submit" value="Set Cookies"></td></tr>
            </table>
        </form>

        <div class="result">
            <p>First Name: <?php echo isset($_COOKIE['firstname']) ? $_COOKIE['firstname'] : "not set / expired"; ?></p>
            <p>Middle Name: <?php echo isset($_COOKIE['middlename']) ? $_COOKIE['middlename'] : "not set / expired"; ?></p>
            <p>Last Name: <?php echo isset($_COOKIE['lastname']) ? $_COOKIE['lastname'] : "not set / expired"; ?></p>
        </div>
    </div>
</body>
</html>