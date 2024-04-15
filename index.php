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

$EOelso = "A megújuló erőforrások fogyasztása";
$EOmasodik = "A környezet helyzete";
$EOharmadik = "Fenntarthatóság";
$elsoOszlop = array($EOelso, $EOmasodik, $EOharmadik);

$MOelso = "a természet újratermelő kapacitásával azonos mértékű";
$MOmasodik = "környezeti egyensúly";
$MOharmadik = "fenntartható, nem változó állapot";
$masodikOszlop = array($MOelso,$MOmasodik,$MOharmadik);

$HOelso = "kevesebb, mint amit a természet újratermelni képes";
$HOmasodik = "a környezet megújul";
$HOharmadik = "fenntartható fejlődés";
$harmadikOszlop = array($HOelso, $HOmasodik, $HOharmadik);

echo "<h3> </h3>";
echo "<h4 class ='cim'>3.feladat: Megújuló energiaforrás </h4>";
// 3. feladat
echo "<p>Megújuló energiaforrásnak nevezzük az energiahordozók azon csoportját, amelyek emberi időléptékben képesek megújulni, azaz nem fogynak el, ellentétben a nem megújuló energiaforrásokkal. A megújuló energiaforrások a napenergia közvetlen termikus és fotoelektromos hasznosítása, a biomassza, szélenergia, vízenergia, a tenger hullámzásából kinyerhető energia, a geotermikus energia, valamint a Holddal összefüggésben az árapály energia. A geotermikus energia a Nappal való kapcsolat, a földfelszín Napból és a magmából származó energiaáram jelentős különbsége alapján sorolható a megújuló energiaforrások közé.</p>";

echo "<table>";
echo "<tr>";
echo "<th>Ország</th>";
echo "<th>EU cél 2020</th>";
echo "</tr>";
$megujAr = array("EU átlag"=>"20", "Belgium"=>"13", "Bulgária"=>"16", "Dánia"=>"20", "EU átlag"=>"30", "Németország"=>"18", "Észtország"=>"25", "Finnország"=>"36");
foreach ($megujAr as $kulcs => $ertek){
    echo
    "
    <tr>
    <td>$kulcs</td>
    <td>$ertek</td>
    </tr>
    ";
}
echo "</table>";


?>

</body>
</html>
<html>
