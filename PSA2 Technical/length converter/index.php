<!DOCTYPE html>

<html>
<head>
    <title>Length Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f0f0f0;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 10px auto;
        }
        th {
            background-color: #3af0cb;
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        td {
            border: 1px solid black;
            padding: 6px 10px;
            background-color: white;
        }
    </style>
</head>
<body>

<h2>Measure Conversion Chart/h2>

<?php
$cm_to_mm  = 1 * 10;
$dm_to_cm  = 1 * 10;
$m_to_cm   = 1 * 100;
$km_to_m   = 1 * 1000;

$foot_to_inch     = 1 * 12;
$yard_to_feet     = 1 * 3;
$chain_to_yards   = 1 * 22;
$furlong_to_yards = 1 * 220;
$mile_to_yards    = 1 * 1760;

$mm_to_inch = 1 * 0.03937;
$cm_to_inch = 1 * 0.39370;
$m_to_inch  = 1 * 39.37008;
$m_to_feet  = 1 * 3.28084;
$m_to_yard  = 1 * 1.09361;
$km_to_yard = 1 * 1093.6133;
$km_to_mile = 1 * 0.62137;

$inch_to_cm = 1 * 2.54;
$foot_to_cm = 1 * 30.48;
$yard_to_cm = 1 * 91.44;
$yard_to_m  = 1 * 0.9144;
$mile_to_m  = 1 * 1609.344;
$mile_to_km = 1 * 1.609344;
?>

<table>
    <tr><th colspan="2">METRIC CONVERSIONS</th></tr>
    <tr><td>1 centimetre</td><td><?php echo "= " . $cm_to_mm . " millimetres"; ?></td></tr>
    <tr><td>1 decimetre</td><td><?php echo "= " . $dm_to_cm . " centimetres"; ?></td></tr>
    <tr><td>1 metre</td><td><?php echo "= " . $m_to_cm . " centimetres"; ?></td></tr>
    <tr><td>1 kilometre</td><td><?php echo "= " . $km_to_m . " metres"; ?></td></tr>
</table>

<table>
    <tr><th colspan="2">IMPERIAL CONVERSIONS</th></tr>
    <tr><td>1 foot</td><td><?php echo "= " . $foot_to_inch . " inches"; ?></td></tr>
    <tr><td>1 yard</td><td><?php echo "= " . $yard_to_feet . " feet"; ?></td></tr>
    <tr><td>1 chain</td><td><?php echo "= " . $chain_to_yards . " yards"; ?></td></tr>
    <tr><td>1 furlong</td><td><?php echo "= " . $furlong_to_yards . " yards (or 10 chains)"; ?></td></tr>
    <tr><td>1 mile</td><td><?php echo "= " . $mile_to_yards . " yards (or 8 furlongs)"; ?></td></tr>
</table>

<table>
    <tr><th colspan="2">METRIC TO IMPERIAL CONVERSIONS</th></tr>
    <tr><td>1 millimetre</td><td><?php echo "= " . $mm_to_inch . " inches"; ?></td></tr>
    <tr><td>1 centimetre</td><td><?php echo "= " . $cm_to_inch . " inches"; ?></td></tr>
    <tr><td>1 metre</td><td><?php echo "= " . $m_to_inch . " inches"; ?></td></tr>
    <tr><td>1 metre</td><td><?php echo "= " . $m_to_feet . " feet"; ?></td></tr>
    <tr><td>1 metre</td><td><?php echo "= " . $m_to_yard . " yards"; ?></td></tr>
    <tr><td>1 kilometre</td><td><?php echo "= " . $km_to_yard . " yards"; ?></td></tr>
    <tr><td>1 kilometre</td><td><?php echo "= " . $km_to_mile . " miles"; ?></td></tr>
</table>

<table>
    <tr><th colspan="2">IMPERIAL TO METRIC CONVERSIONS</th></tr>
    <tr><td>1 inch</td><td><?php echo "= " . $inch_to_cm . " centimetres"; ?></td></tr>
    <tr><td>1 foot</td><td><?php echo "= " . $foot_to_cm . " centimetres"; ?></td></tr>
    <tr><td>1 yard</td><td><?php echo "= " . $yard_to_cm . " centimetres"; ?></td></tr>
    <tr><td>1 yard</td><td><?php echo "= " . $yard_to_m . " metres"; ?></td></tr>
    <tr><td>1 mile</td><td><?php echo "= " . $mile_to_m . " metres"; ?></td></tr>
    <tr><td>1 mile</td><td><?php echo "= " . $mile_to_km . " kilometres"; ?></td></tr>
</table>

</body>
</html>