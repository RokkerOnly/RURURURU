<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volume of Shapes</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 30px; }
        table { width: 60%; border-collapse: collapse; margin: 0 auto; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
    </style>
</head>
<body>

<?php
function cubevolume($s) { return $s ** 3; }
function rectprismvolume($l, $w, $h) { return $l * $w * $h; }
function prismvolume($b, $h, $l) { return 0.5 * $b * $h * $l; }
function cylindervolume($r, $h) { return M_PI * $r ** 2 * $h; }
function pyramidvolume($l, $w, $h) { return ($l * $w * $h) / 3; }
function conevolume($r, $h) { return (M_PI * $r ** 2 * $h) / 3; }
function spherevolume($r) { return (4 * M_PI * $r ** 3) / 3; }
?>

<table>
    <tr><th colspan="3">Volume of Shapes</th></tr>
    <tr><th>Values</th><th>Formula</th><th>Answer</th></tr>
    <tr>
        <td>s = 5</td>
        <td>V = s^3</td>
        <td><?php echo cubevolume(5); ?></td>
    </tr>
    <tr>
        <td>l = 4, w = 3, h = 5</td>
        <td>V = l x w x h</td>
        <td><?php echo rectprismvolume(4, 3, 5); ?></td>
    </tr>
    <tr>
        <td>b = 4, h = 3, l = 6</td>
        <td>V = 0.5 x b x h x l</td>
        <td><?php echo prismvolume(4, 3, 6); ?></td>
    </tr>
    <tr>
        <td>r = 3, h = 7</td>
        <td>V = PI x r^2 x h</td>
        <td><?php echo round(cylindervolume(3, 7), 2); ?></td>
    </tr>
    <tr>
        <td>l = 4, w = 3, h = 6</td>
        <td>V = (l x w x h) / 3</td>
        <td><?php echo pyramidvolume(4, 3, 6); ?></td>
    </tr>
    <tr>
        <td>r = 3, h = 7</td>
        <td>V = (PI x r^2 x h) / 3</td>
        <td><?php echo round(conevolume(3, 7), 2); ?></td>
    </tr>
    <tr>
        <td>r = 5</td>
        <td>V = (4 x PI x r^3) / 3</td>
        <td><?php echo round(spherevolume(5), 2); ?></td>
    </tr>
</table>

</body>
</html>