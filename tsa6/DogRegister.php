<?php
$conn = mysqli_connect("localhost", "root", "", "tsa 6 db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = $_POST["name"];
    $breed  = $_POST["breed"];
    $age    = $_POST["age"];
    $add    = $_POST["address"];
    $color  = $_POST["color"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    $sql = "INSERT INTO dogs (d_name, d_breed, d_age, d_address, d_color, d_height, d_weight) VALUES ('$name', '$breed', '$age', '$add', '$color', '$height', '$weight')";
    if (mysqli_query($conn, $sql)) {
        echo "<p>Record saved!</p>";
    } else {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dog Register</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <table>
    <tr><td colspan="2"><b>Dog Information</b></td></tr>
    <tr><td>Name</td></tr>
    <tr><td><input type="text" name="name" form="dogform"></td></tr>
    <tr><td>Breed</td></tr>
    <tr><td><input type="text" name="breed" form="dogform"></td></tr>
    <tr><td>Age</td></tr>
    <tr><td><input type="text" name="age" form="dogform"></td></tr>
    <tr><td>Address</td></tr>
    <tr><td><input type="text" name="address" form="dogform"></td></tr>
    <tr><td>Color</td></tr>
    <tr><td><input type="text" name="color" form="dogform"></td></tr>
    <tr><td>Height</td></tr>
    <tr><td><input type="text" name="height" form="dogform"></td></tr>
    <tr><td>Weight</td></tr>
    <tr><td><input type="text" name="weight" form="dogform"></td></tr>
    <tr>
      <td>
        <form id="dogform" method="POST" action="DogRegister.php">
          <input type="submit" value="save">
        </form>
      </td>
    </tr>
  </table>
</body>
</html>