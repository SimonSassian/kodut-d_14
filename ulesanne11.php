<?php
// Andmete salvestamine faili
$andmed = [
    'Nimi' => 'Simon Sassian',
    'Email' => 'simonsassian@tthk.ee',
    'Vanus' => 18,
    'Hobi' => 'programeerimine'
];

$failinimi = 'andmefail.txt';

$file = fopen($failinimi, 'w');
if ($file) {
    foreach ($andmed as $voti => $vaartus) {
        fwrite($file, "$voti: $vaartus\n");
    }
    fclose($file);
    echo 'Andmed on salvestatud faili.<br>';
} else {
    echo 'Faili ei saanud avada kirjutamiseks.<br>';
}

// Andmete lugemine failist
$file = fopen($failinimi, 'r');
if ($file) {
    $sisu = fread($file, filesize($failinimi));
    fclose($file);
    
    $sisu = nl2br($sisu); // Asenda reavahetused <br>-märgenditega
    echo 'Loetud ja töödeldud tekst:<br>';
    echo $sisu;
} else {
    echo 'Faili ei saanud avada lugemiseks.<br>';
}

// Andmete muutmine failis
$file = fopen($failinimi, 'r+');
if ($file) {
    $esimene_rida = fgets($file); // Loeme esimese rea
    fseek($file, 0); // Liigume tagasi faili algusse
    
    $lisatav_info = "Telefon: 555-1234\nAadress: 123 Main Street\n";
    fwrite($file, $lisatav_info); // Lisame uue info
    
    fwrite($file, $esimene_rida); // Kirjutame esimese rea tagasi
    
    fclose($file);
    echo 'Andmeid on muudetud failis.<br>';
} else {
    echo 'Faili ei saanud avada lugemiseks ja kirjutamiseks.<br>';
}

// Faili suuruse kontroll ja kustutamine
if (filesize($failinimi) > 200) {
    unlink($failinimi); // Kustutame faili
    echo 'Fail on kustutatud.<br>';
} else {
    echo 'Fail ei vasta kustutamise kriteeriumile.<br>';
}
?>
