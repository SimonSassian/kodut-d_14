<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T9zj2l5Cyj4Cv5XtPiqJgz6ZZc5P7W1xpviy6Uv2Cz2F8oZ5bIn58Xj3KM5O5f5b" crossorigin="anonymous">
    <title>Ülesanded</title>
</head>
<body>
    <div class="container">
        <h1>Ülesanded</h1>

        <?php
        // Ülesanne 1
        $number1 = 20;
        $number2 = 4;

        $sum = $number1 + $number2;
        $diff = $number1 - $number2;
        $product = $number1 * $number2;
        $quotient = $number1 / $number2;
        $remainder = $number1 % $number2;

        echo '<h2>Ülesanne 1 - Arvutused ' . $number1 . ' ja ' . $number2 . ' vahel:</h2>';
        echo '<p>' . $number1 . ' + ' . $number2 . ' = ' . $sum . '</p>';
        echo '<p>' . $number1 . ' - ' . $number2 . ' = ' . $diff . '</p>';
        echo '<p>' . $number1 . ' * ' . $number2 . ' = ' . $product . '</p>';
        echo '<p>' . $number1 . ' / ' . $number2 . ' = ' . $quotient . '</p>';
        echo '<p>Jääk ' . $number1 . ' ja ' . $number2 . ' jagamisel on ' . $remainder . '</p>';

        // Ülesanne 2
        $millimeters = 1250;
        $centimeters = $millimeters / 10;
        $meters = $centimeters / 100;

        echo '<h2>Ülesanne 2 - Millimeetrid teisendatud sentimeetriteks ja meetriteks:</h2>';
        echo '<p>' . $millimeters . ' mm on ' . number_format($centimeters, 2) . ' cm</p>';
        echo '<p>' . $millimeters . ' mm on ' . number_format($meters, 2) . ' m</p>';

        // Ülesanne 3
        $a = 3;
        $b = 4;
        $c = sqrt($a * $a + $b * $b);
        $perimeter = $a + $b + $c;
        $area = 0.5 * $a * $b;

        echo '<h2>Ülesanne 3 - Täisnurkse kolmnurga ümbermõõt ja pindala:</h2>';
        echo '<p>Külgede pikkused: a = ' . $a . ', b = ' . $b . ', c = ' . round($c) . '</p>';
        echo '<p>Ümbermõõt: ' . round($perimeter) . '</p>';
        echo '<p>Pindala: ' . round($area) . '</p>';

        // Bootstrap lisamine
        echo '<h2>Bootstrap lisamine:</h2>';
        echo '<p>Nimi: Simon Sassian</p>';
        ?>

    </div>
</body>
</html>
