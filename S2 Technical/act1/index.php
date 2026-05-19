<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Fruits</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$fruits = [
    ["Apple",      "apple.jpg",  "Color: Red",    "Apples are rich in fiber and vitamin C."],
    ["Banana",     "banana.jpg",  "Color: Yellow", "Bananas are a good source of fiber and vital nutrients."],
    ["Cherry",     "cherry.jpg",  "Color: Red",    "Cherries are packed with antioxidants."],
    ["Durian",     "durian.jpg",  "Color: Yellow", "Durian is known as the king of fruits in Southeast Asia."],
    ["Grape",      "grapes.jpg",  "Color: Purple", "Grapes are high in vitamins C and K."],
    ["Dragon Fruit",       "dragon.jpg",  "Color: Purple",  "Dragon Fruits support gut health and the immune system with rich fiber and vitamin C."],
    ["Mango",      "mango.jpg",  "Color: Orange", "Mangoes are rich in vitamins A and C."],
    ["Orange",     "orange.jpg",  "Color: Orange", "Oranges are an excellent source of vitamin C."],
    ["Pineapple",     "pineapple.jpg",  "Color: Yellow", "Pineapples contain enzymes that aid digestion and reduce inflammation."],
    ["Strawberry", "strawberry.jpg", "Color: Red",    "Strawberries are high in antioxidants and vitamin C."],
];

sort($fruits);
?>

<table>
    <tr><th colspan="4">My Fruits</th></tr>
    <tr><th>Image</th><th>Name</th><th>Description</th><th>Facts</th></tr>
    <?php foreach ($fruits as $fruit) { ?>
    <tr>
        <td><img src="<?= $fruit[1] ?>" alt="<?= $fruit[0] ?>"></td>
        <td><?= $fruit[0] ?></td>
        <td><?= $fruit[2] ?></td>
        <td><?= $fruit[3] ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>