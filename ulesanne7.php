<?php

// Tervitusfunktsioon
function tervita($nimi) {
    return "Tere $nimi!";
}

// Liitu uudiskirjaga - Bootstrap vormi genereerimise funktsioon
function loo_uudiskirja_vorm() {
    $vorm = '
    <form>
        <div class="form-group">
            <label for="kasutajanimi">Kasutajanimi</label>
            <input type="text" class="form-control" id="kasutajanimi" name="kasutajanimi">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Liitu uudiskirjaga</button>
    </form>';

    return $vorm;
}

// Kasutajanime muutmise funktsioon
function muuda_kasutajanimi_vaikeks($kasutajanimi) {
    return strtolower($kasutajanimi);
}

// Emaili loomine kasutajanime põhjal
function loo_email($kasutajanimi) {
    return $kasutajanimi . "@hkhk.edu.ee";
}

// 7-kohalise koodi genereerimine
function genereeri_kood() {
    $kood = "";
    $symbols = "abcdefghijklmnopqrstuvwxyz0123456789";
    for ($i = 0; $i < 7; $i++) {
        $kood .= $symbols[random_int(0, strlen($symbols) - 1)];
    }
    return $kood;
}

// Arvude vahemiku genereerimine
function genereeri_arvud_vahemikus($algus, $lopp) {
    $arvud = [];
    for ($i = $algus; $i <= $lopp; $i++) {
        $arvud[] = $i;
    }
    return $arvud;
}

// Arvude vahemiku ja sammupikkuse genereerimine
function genereeri_arvud_sammuga($algus, $lopp, $samm) {
    $arvud = [];
    for ($i = $algus; $i <= $lopp; $i += $samm) {
        $arvud[] = $i;
    }
    return $arvud;
}

// Ristkülikupindala leidmine
function ristkulikupindala($pikkus, $laius) {
    return $pikkus * $laius;
}

// Isikukoodi pikkuse kontroll
function on_oige_pikkus($isikukood) {
    return strlen($isikukood) == 11;
}

// Isikukoodist soo ja sünniaja leidmine
function leia_sugu_sunniaeg($isikukood) {
    $sugu = substr($isikukood, 0, 1) % 2 == 0 ? "Naine" : "Mees";
    $sunniaeg = substr($isikukood, 5, 2) . "." . substr($isikukood, 3, 2) . "." . substr($isikukood, 1, 2);
    return "Sugu: $sugu, Sünniaeg: $sunniaeg";
}

// Head mõtted massiivides
$alus = ["Täna", "Homme", "Igal päeval"];
$öeldis = ["on ilus ilm", "õpid midagi uut", "kohtud uute inimestega"];
$sihitis = ["ning naudid elu!", "ja tunned rõõmu!", "ja saad hakkama kõigega!"];

// Suvalise lause loomine
$juhuslik_alus = $alus[array_rand($alus)];
$juhuslik_öeldis = $öeldis[array_rand($öeldis)];
$juhuslik_sihitis = $sihitis[array_rand($sihitis)];
$lause = "$juhuslik_alus $juhuslik_öeldis $juhuslik_sihitis";

echo tervita("päiksekesekene") . "<br>";
echo loo_uudiskirja_vorm() . "<br>";
$kasutajanimi = "KasutajaNimi";
echo "Muudetud kasutajanimi: " . muuda_kasutajanimi_vaikeks($kasutajanimi) . "<br>";
echo "Loodud email: " . loo_email($kasutajanimi) . "<br>";
echo "7-kohaline kood: " . genereeri_kood() . "<br>";
echo "Arvud vahemikus: " . implode(", ", genereeri_arvud_vahemikus(2, 8)) . "<br>";
echo "Arvud vahemikus sammuga: " . implode(", ", genereeri_arvud_sammuga(2, 8, 3)) . "<br>";
echo "Ristkülikupindala: " . ristkulikupindala(5, 7) . "<br>";
$isikukood = "39502240299";
echo "Õige pikkus: " . (on_oige_pikkus($isikukood) ? "Jah" : "Ei") . "<br>";
echo leia_sugu_sunniaeg($isikukood) . "<br>";
echo "Suvaline lause: " . $lause;

?>
