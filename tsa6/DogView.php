<?php
$conn = mysqli_connect("localhost", "root", "", "tsa 6 db");
$result = mysqli_query($conn, "SELECT * FROM dogs");
$count = 1;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dog View</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php while ($row = mysqli_fetch_assoc($result)): ?>
  <div class="dog-box">
    <b>Dog <?= $count ?></b><br>
    Name: <?= $row["d_name"] ?><br>
    Breed: <?= $row["d_breed"] ?><br>
    Age: <?= $row["d_age"] ?><br>
    Address: <?= $row["d_address"] ?><br>
    Color: <?= $row["d_color"] ?><br>
    Height: <?= $row["d_height"] ?><br>
    Weight: <?= $row["d_weight"] ?>
  </div>
<?php $count++; endwhile; ?>

</body>
</html>