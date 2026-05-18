<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];

$sum = array_sum($numbers);

$difference = $numbers[0];
for ($i  = 1; $i < count($numbers); $i++) {
    $difference -= $numbers[$i];
}

$product = 1;
foreach ($numbers as $n) {
    $product *= $n;
}

$quotient = $numbers[0];
for ($i  = 1; $i < count($numbers); $i++) {
    $quotient /= $numbers[$i];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2</title>

    <link rel="stylesheet" href="style.css">
 </head>
<body>
    
<table>
 <tr>
    <th colspan="2"> Array list: <?= implode(", ", $numbers) ?></th>
  </tr>
  <tr><td>Addition</td><td><?= $sum ?></td></tr>
  <tr><td>Subtraction</td><td><?= $difference ?></td></tr>
  <tr><td>Multiplication</td><td><?= $product ?></td></tr>
  <tr><td>Division</td><td><?= $quotient ?></td></tr>
</table>
</table>
</body>
</html>