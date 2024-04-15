<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albert Orsolya</title>
    <link rel="stylesheet" href="stilus.css">
</head>
<body>
    <?php
    $szemet = array ("papír", "konzerv", "doboz", "üveg")
    ?>

    <form action="#" method="get">
        <label for="szemetem">Kidobandó szemét</label>
        <select name="szemetem" id="szemetem">
        <?php
        foreach ($szemet as $ertek) {
            echo "<option value=\"$ertek\">$ertek</option>";
        }
        ?>
        </select>
    </form>
</body>
</html>