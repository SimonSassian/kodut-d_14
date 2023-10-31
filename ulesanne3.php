<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T9zj2l5Cyj4Cv5XtPiqJgz6ZZc5P7W1xpviy6Uv2Cz2F8oZ5bIn58Xj3KM5O5f5b" crossorigin="anonymous">
    <title>Vastused</title>
</head>
<body>
    <div class="container">
        <h1>Vastused</h1>

        <?php
        // Küsi andmed vormist
        $a = $_POST['a'];
        $b = $_POST['b'];
        $d1 = $_POST['d1'];
        $d2 = $_POST['d2'];

        // Arvutused
        $trapezoid_area = 0.5 * ($a + $b) * ($d1 + $d2);
        $rhombus_perimeter = 4 * sqrt(($d1 / 2) ** 2 + ($d2 / 2) ** 2);

        // Väljund täislausega ja ümardatult
        echo '<p>Trapetsi pindala on ' . round($trapezoid_area, 1) . ' ruutühikut.</p>';
        echo '<p>Rombi ümbermõõt on ' . round($rhombus_perimeter, 1) . ' ühikut.</p>';
        echo '<p>Nimi: Simon Sassian</p>';
        ?>

    </div>
</body>
</html>
