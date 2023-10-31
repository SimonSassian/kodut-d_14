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
        // Sinu nimi ja kuupäev
        $your_name = "Simon Sassian";
        $current_date = date("Y-m-d");

        echo "<p>Sinu nimi: $your_name</p>";
        echo "<p>Kuupäev: $current_date</p>";
        ?>

        <!-- Ülesanne 1 - Jagamine -->
        <h2>Ülesanne 1 - Jagamine</h2>
        <form method="post">
            <div class="form-group">
                <label for="numerator">Sisesta jagatav arv:</label>
                <input type="number" class="form-control" id="numerator" name="numerator" required>
            </div>
            <div class="form-group">
                <label for="denominator">Sisesta jagaja:</label>
                <input type="number" class="form-control" id="denominator" name="denominator" required>
            </div>
            <button type="submit" class="btn btn-primary">Arvuta</button>
        </form>
        <?php
        if (isset($_POST['numerator']) && isset($_POST['denominator'])) {
            $numerator = $_POST['numerator'];
            $denominator = $_POST['denominator'];

            if ($denominator == 0) {
                echo '<p class="alert alert-danger">Nulliga jagamine ei ole lubatud!</p>';
            } else {
                $result = $numerator / $denominator;
                echo '<p>Jagamise tulemus: ' . round($result, 1) . '</p>';
            }
        }
        ?>

        <!-- Ülesanne 2 - Vanuse võrdlus -->
        <h2>Ülesanne 2 - Vanuse võrdlus</h2>
        <form method="post">
            <div class="form-group">
                <label for="age1">Sisesta esimese isiku vanus:</label>
                <input type="number" class="form-control" id="age1" name="age1" required>
            </div>
            <div class="form-group">
                <label for="age2">Sisesta teise isiku vanus:</label>
                <input type="number" class="form-control" id="age2" name="age2" required>
            </div>
            <button type="submit" class="btn btn-primary">Võrdle</button>
        </form>
        <?php
        if (isset($_POST['age1']) && isset($_POST['age2'])) {
            $age1 = $_POST['age1'];
            $age2 = $_POST['age2'];

            if ($age1 == $age2) {
                echo '<p>Mõlemad isikud on sama vanad.</p>';
            } elseif ($age1 > $age2) {
                echo '<p>Esimene isik on vanem.</p>';
            } else {
                echo '<p>Teine isik on vanem.</p>';
            }
        }
        ?>

        <!-- Ülesanne 3 - Ristkülik või ruut -->
        <h2>Ülesanne 3 - Ristkülik või ruut</h2>
        <form method="post">
            <div class="form-group">
                <label for="length">Sisesta ristküliku pikkus:</label>
                <input type="number" class="form-control" id="length" name="length" required>
            </div>
            <div class="form-group">
                <label for="width">Sisesta ristküliku laius:</label>
                <input type="number" class="form-control" id="width" name="width" required>
            </div>
            <button type="submit" class="btn btn-primary">Määra kuju</button>
        </form>
        <?php
        if (isset($_POST['length']) && isset($_POST['width'])) {
            $length = $_POST['length'];
            $width = $_POST['width'];

            if ($length == $width) {
                echo '<p>Tegemist on ruuduga.</p>';
            } else {
                echo '<p>Tegemist on ristkülikuga.</p>';
            }
        }
        ?>

        <!-- Ülesanne 4 - Ristkülik või ruut II -->
        <h2>Ülesanne 4 - Ristkülik või ruut II</h2>
        <form method="post">
            <div class="form-group">
                <label for="shape_choice">Vali kuju (ruut või ristkülik):</label>
                <select class="form-control" id="shape_choice" name="shape_choice" required>
                    <option value="square">Ruut</option>
                    <option value="rectangle">Ristkülik</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Näita kuju</button>
        </form>
        <?php
        if (isset($_POST['shape_choice'])) {
            $shape_choice = $_POST['shape_choice'];

            if ($shape_choice == 'square') {
                echo '<p>Valisid ruudu.</p>';
            } elseif ($shape_choice == 'rectangle') {
                echo '<p>Valisid ristküliku.</p>';
            }
        }
        ?>

        <!-- Ülesanne 5 - Juubeliaasta -->
        <h2>Ülesanne 5 - Juubeliaasta</h2>
        <form method="post">
            <div class="form-group">
                <label for="birth_year">Sisesta sünniaasta:</label>
                <input type="number" class="form-control" id="birth_year" name="birth_year" required>
            </div>
            <button type="submit" class="btn btn-primary">Kontrolli</button>
        </form>
        <?php
        if (isset($_POST['birth_year'])) {
            $birth_year = $_POST['birth_year'];

            if (($birth_year % 100 != 0 && $birth_year % 4 == 0) || ($birth_year % 400 == 0)) {
                echo '<p>' . $birth_year . ' on juubeliaasta.</p>';
            } else {
                echo '<p>' . $birth_year . ' ei ole juubeliaasta.</p>';
            }
        }
        ?>

        <!-- Ülesanne 6 - Hinnang -->
        <h2>Ülesanne 6 - Hinnang</h2>
        <form method="post">
            <div class="form-group">
                <label for="points">Sisesta KT punktide arv:</label>
                <input type="number" class="form-control" id="points" name="points" required>
            </div>
            <button type="submit" class="btn btn-primary">Hinda</button>
        </form>
        <?php
        if (isset($_POST['points'])) {
            $points = $_POST['points'];

            if ($points > 10) {
                echo '<p>SUPER!</p>';
            } elseif ($points >= 5) {
                echo '<p>TEHTUD!</p>';
            } else {
                echo '<p>KASIN!</p>';
            }
        }
        ?>
    </div>
</body>
</html>
