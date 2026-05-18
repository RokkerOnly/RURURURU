<?php
function compute($param1, $param2, $param3) {
  $sum        = $param1 + $param2 + $param3;
  $difference = $param1 - $param2 - $param3;
  $product    = $param1 * $param2 * $param3;
  $quotient   = $param1 / $param2 / $param3;
  return [$sum, $difference, $product, $quotient];
}

$result = compute(25, 13, 6);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Activity 3</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<table>
  <tr>
    <th colspan="2">My Parameter values: 25, 13, 6</th>
  </tr>
  <tr><td>Addition</td><td><?= $result[0] ?></td></tr>
  <tr><td>Subtraction</td><td><?= $result[1] ?></td></tr>
  <tr><td>Multiplication</td><td><?= $result[2] ?></td></tr>
  <tr><td>Division</td><td><?= $result[3] ?></td></tr>
</table>

</body>
</html>
