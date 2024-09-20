<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $capitale = 150000;
        $tassoDiInteresse = 24;
        $giorni = 120;
        $tasso;
        $tasso = ($capitale * $tassoDiInteresse * $giorni) / 36500;
        echo "<p>Il capitale è $capitale</p>";
        echo "<br>";
        echo "<p>Il tasso è del " .$tassoDiInteresse."%</p>";
        echo "<br>";
        echo "<p>I giorni sono $giorni</p>";
        echo "<br>";
        echo "<h2 style='color: green'>L'interesse calcolato è di ".$tasso."€</h2>"
    ?>
</body>
</html>