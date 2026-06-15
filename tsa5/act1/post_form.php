<?php
$data = null;
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $data = $_POST;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information POST METHOD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <hr>
<form method="POST" action="">
    <table>
        <tr><td>First Name:</td><td><input type="text" name="firstname"></td></tr>
        <tr><td>Middle Name:</td><td><input type="text" name="middlename"></td></tr>
        <tr><td>Last Name:</td><td><input type="text" name="lastname"></td></tr>
        <tr><td>Date of Birth:</td><td><input type="text" name="dob"></td></tr>
        <tr><td>Address:</td><td><input type="text" name="address"></td></tr>
        <tr><td></td><td><input type="submit" name="post_submit" value="Submit"></td></tr>
    </table>
</form>

<?php if ($data): ?>
<div class="result">
    <p>First Name: <?php echo $data['firstname']; ?></p>
    <p>Middle Name: <?php echo $data['middlename']; ?></p>
    <p>Last Name: <?php echo $data['lastname']; ?></p>
    <p>Date of Birth: <?php echo $data['dob']; ?></p>
    <p>Address: <?php echo $data['address']; ?></p>
</div>
<?php endif; ?>
</body>
</html>