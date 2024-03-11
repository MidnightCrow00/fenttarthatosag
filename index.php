<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albert Orsolya</title>
    <link rel="stylesheet" href="stilus.css">
</head>
<body>
    <header><h1>Órai Feladatok</h1></header>
<?php
$elsoSzint = 'Ökoszisztéma';
$masodikSzint = 'Társadalom';
$harmadikSzint = 'Gazdaság';
$negyedikSzint = 'Pénz';
echo "<h3> </h3>";
echo "<h4 class ='cim'>1.feladat: Fenntarthatósági hét </h4>";

echo "<div class='alap'>";
    echo "<div class='kep'>";
    echo "<img src='ábra.PNG' alt='ábra'>";
    echo "</div>";

    echo "<div class='szoveg'>";
    echo "<h2>A fenntarthatóság szintjei</h2>";
    echo "<ul>";
    echo "<li>$elsoSzint</li>";
    echo "<li>$masodikSzint</li>";
    echo "<li>$harmadikSzint</li>";
    echo "<li>$negyedikSzint</li>";
    echo "</ul>";
    echo "</div>";
echo "</div>";

echo "<h3> </h3>";
echo "<h4 class ='cim'>2.feladat: Fogyasztás, környezet és fenntarthatóság kapcsolata </h4>";

$fogyasztas = array(
    "több, mint amit a természet újratermelni képes",
    "a természet újratermelő kapacitásával azonos mértékű",
    "kevesebb, mint amit a természet újratermelni képes"
);

$kornyezet = array(
    "a környezet pusztul",
    "környezeti egyensúly",
    "a környezet megújul"
);

$fenntarthato = array(
    "nem fenntartható",
    "fenntartható, nem változó állapot",
    "fenntartható fejlődés"
);

echo "<table>";
echo "<tr><th>A megújuló erőforrások fogyasztása</th><th>A környezet helyzete</th><th>Fenntarthatóság</th></tr>";
for ($i = 0; $i < count($fogyasztas); $i++) {
    echo "<tr><td>" . $fogyasztas[$i] . "</td><td>" . $kornyezet[$i] . "</td><td>" . $fenntarthato[$i] . "</td></tr>";
}
echo "</table>";

?>

</body>
</html>
<html>
