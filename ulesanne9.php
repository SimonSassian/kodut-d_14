<!DOCTYPE html>
<html>
<head>
    <title>Tervitus ja Email</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimi = $_POST["nimi"];
    $sõnum = $_POST["sõnum"];
    $kasutaja_email = "";

    // Tervitus nimepidi
    $nimi = ucfirst(strtolower($nimi));

    // Tähtede tükeldamine ja punktide lisamine
    $nimi_tükeldatud = str_split($nimi);
    $nimi_punktidega = implode(".", $nimi_tükeldatud);

    // Asendame ropud sõnad tärnidega
    $sõnum = preg_replace("/räige|RopudSonaad|roppsõnad/", "***", $sõnum);

    // Eesnime ja perenime lugemine
    $nime_osad = explode(" ", $nimi);
    $eesnimi = $nime_osad[0];
    $perenimi = $nime_osad[count($nime_osad) - 1];

    // Emaili loomine
    $eesnimi = str_replace(["ä", "ö", "ü", "õ"], ["a", "o", "y", "o"], strtolower($eesnimi));
    $perenimi = str_replace(["ä", "ö", "ü", "õ"], ["a", "o", "y", "o"], strtolower($perenimi));
    $kasutaja_email = $eesnimi . "." . $perenimi . "@tthk.ee";

    echo "Tere, $nimi! <br>";
    echo "Nimi punktidega: $nimi_punktidega <br>";
    echo "Email: $kasutaja_email <br>";
    echo "Sõnum: $sõnum <br>";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Nimi: <input type="text" name="nimi" required><br>
    Sõnum: <input type="text" name="sõnum" required><br>
    <input type="submit" value="Saada">
</form>

</body>
</html>
