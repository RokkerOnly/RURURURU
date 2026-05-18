<?php
    $people = [
        "Juan Dela Cruz" => ["img" => "img1.jpg", "age" => 23, "bday" => "03/09/2003", "contact" => "09189987231"],
        "Jane Gargano" => ["img" => "img5.jpg", "age" => 28, "bday" => "01/16/1998", "contact" => "09179567231"],
        "Aaron Cruz" => ["img" => "img3.jpg", "age" => 27, "bday" => "04/18/1999", "contact" => "09189918631"],
        "Michael Bolero" => ["img" => "img4.jpg", "age" => 19, "bday" => "09/08/2007", "contact" => "09156987231"],
        "Sam Martinez" => ["img" => "img2.jpg", "age" => 18, "bday" => "07/04/2008", "contact" => "09189989631"],
        "Harvey Carmel" => ["img" => "img6.jpg", "age" => 24, "bday" => "12/13/2002", "contact" => "09189909641"],
        "Cedrick Valera" => ["img" => "img7.jpg", "age" => 26, "bday" => "07/22/2000", "contact" => "09189700131"],
        "Stephen Blanza" => ["img" => "img8.jpg", "age" => 25, "bday" => "04/02/2001", "contact" => "09185497231"],
        "Mark Castro" => ["img" => "img9.jpg", "age" => 24, "bday" => "08/09/2002", "contact" => "09196382131"],
        "Gerald Arago" => ["img" => "img10.jpg", "age" => 29, "bday" => "09/27/1997", "contact" => "09189959012"],
    ];   
        ksort($people);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act1</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<table>
  <tr>
    <th>No.</th>
    <th>Name</th>
    <th>Image</th>
    <th>Age</th>
    <th>Birthday</th>
    <th>Contact Number</th>
  </tr>
  <?php $i = 1; foreach ($people as $name => $info) { ?>
  <tr>
    <td><?= $i++ ?></td>
    <td><?= $name ?></td>
    <td><img src="<?= $info['img'] ?>" alt="<?= $name ?>"></td>
    <td><?= $info['age'] ?></td>
    <td><?= $info['bday'] ?></td>
    <td><?= $info['contact'] ?></td>
  </tr>
  <?php } ?>
</table>

    
</body>
</html>