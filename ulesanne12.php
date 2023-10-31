<!DOCTYPE html>
<html>
<head>
    <title>Sõiduaeg ja Palgade võrdlus</title>
    <!-- Lisatud Bootstrapi lingid -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Sõiduaeg</h1>

    <form method="post">
        <label for="start">Stardi aeg (hh:mm):</label>
        <input type="text" id="start" name="start" minlength="5">

        <label for="end">Lõppaeg (hh:mm):</label>
        <input type="text" id="end" name="end" minlength="5">

        <input type="submit" value="Arvuta sõiduaeg">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $start_time = $_POST['start'];
        $end_time = $_POST['end'];

        if (strlen($start_time) < 5 || strlen($end_time) < 5) {
            echo '<p>Sisestatud ajad peavad olema vähemalt viis sümbolit pikad.</p>';
        } else {
            $start = strtotime($start_time);
            $end = strtotime($end_time);

            if ($start === false || $end === false) {
                echo '<p>Vigane ajaformaat. Kasuta formaati "hh:mm".</p>';
            } else {
                $difference = $end - $start;
                $hours = floor($difference / 3600);
                $minutes = round(($difference % 3600) / 60);

                echo "<p>Sõiduaeg: $hours tundi ja $minutes minutit.</p>";
            }
        }
    }
    ?>

    <h1>Palkade võrdlus</h1>

    <?php
    $filename = 'tootajad.csv';

    if (!file_exists($filename)) {
        die("Andmefail '$filename' ei eksisteeri.");
    }

    $rows = file($filename, FILE_IGNORE_NEW_LINES);

    $meeste_palga_summa = 0;
    $naiste_palga_summa = 0;
    $meeste_palga_max = 0;
    $naiste_palga_max = 0;

    foreach ($rows as $row) {
        list($nimi, $sugu, $palk) = explode(';', $row);
        $palk = (int)$palk;

        if ($sugu === 'm') {
            $meeste_palga_summa += $palk;
            if ($palk > $meeste_palga_max) {
                $meeste_palga_max = $palk;
            }
        } elseif ($sugu === 'n') {
            $naiste_palga_summa += $palk;
            if ($palk > $naiste_palga_max) {
                $naiste_palga_max = $palk;
            }
        }
    }

    $meeste_palga_keskmine = $meeste_palga_summa / count($rows);
    $naiste_palga_keskmine = $naiste_palga_summa / count($rows);

    echo "<p>Meeste keskmine palk: $meeste_palga_keskmine</p>";
    echo "<p>Naiste keskmine palk: $naiste_palga_keskmine</p>";
    echo "<p>Meeste kõrgeim palk: $meeste_palga_max</p>";
    echo "<p>Naiste kõrgeim palk: $naiste_palga_max</p>";
    ?>
</body>
</html>
