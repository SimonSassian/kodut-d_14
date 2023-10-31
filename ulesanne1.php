<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Lisatud Bootstrapi lingid -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    
<?php
// Simon Sassian, 10.10.2004

// Ülesanne 1.1 - info output
function outputInfo($name, $birthDate, $symbol) { echo "Name: $name <br> Date of birth: $birthDate} <br> Symbol: $symbol"; }
outputInfo("Simon", "04.21.2005", "square.");

// Ülesanne 1.2 - its my life
function outputLife() { echo "\"It's My Life\" - Dr. Alban"; }
outputLife();

// Ülesanne 1.3 - drawing a bunny
function outputBunnyArt() {
    echo "
    <br>
    <h1>
    (\(\ <br>
    ( - . -) <br>
    <br>
    0_(\")(\")
    </h1>
    ";
}
outputBunnyArt();
?>
</body>
</html>
