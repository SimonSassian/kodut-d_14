<?php
// Kuupäeva ja kellaaeg formaadis 20.03.2023 17:31
echo "Kuupäev ja kellaaeg: " . date("d.m.Y H:i") . "<br>";

// Kasutaja sünnikuupäeva vorm
$sunnikuupaev_vorm = '
<form method="post">
    <label for="synnikuupaev">Sisesta oma sünnikuupäev (YYYY-MM-DD):</label>
    <input type="text" id="synnikuupaev" name="synnikuupaev">
    <input type="submit" value="Leia vanus">
</form>';

echo $sunnikuupaev_vorm;

// Vanuse arvutamine ja väljastamine
if (isset($_POST['synnikuupaev'])) {
    $synnikuupaev = $_POST['synnikuupaev'];
    $sunniaasta = date("Y", strtotime($synnikuupaev));
    $tahtaasta = date("Y");

    if (preg_match("/\d{4}-\d{2}-\d{2}/", $synnikuupaev) && $sunniaasta <= $tahtaasta) {
        $vanus = $tahtaasta - $sunniaasta;
        echo "Te olete $vanus aastat vana!";
    } else {
        echo "Palun sisestage kehtiv sünnikuupäev!";
    }
}

// Kooliaasta lõpuni jäänud päevade arv
$tahtaasta = date("Y");
$kooliaasta_lopp = $tahtaasta + 1;
$jaanipäev = strtotime("$kooliaasta_lopp-06-24");
$paevad_jaanipaeveni = ceil(($jaanipäev - time()) / (60 * 60 * 24));

echo "Kooliaasta lõpuni on jäänud $paevad_jaanipaeveni päeva!<br>";

// Aastaaja piltide väljastamine
$kuu = date("n");
$aastaaja_pildid = [
    "kevad" => "kevad.jpg",
    "suvi" => "suvi.jpg",
    "sügis" => "sugis.jpg",
    "talv" => "talv.jpg"
];

if ($kuu >= 3 && $kuu <= 5) {
    $aastaaja = "kevad";
} elseif ($kuu >= 6 && $kuu <= 8) {
    $aastaaja = "suvi";
} elseif ($kuu >= 9 && $kuu <= 11) {
    $aastaaja = "sügis";
} else {
    $aastaaja = "talv";
}

$pilt = $aastaaja_pildid[$aastaaja];
echo "<img src='$pilt' alt='$aastaaja'>";
?>
