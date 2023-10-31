<?php
// Loo arvud 1-100 ja lisa punkt iga arvu järele
for ($i = 1; $i <= 100; $i++) {
    echo $i . ".";
    if ($i % 10 == 0) {
        echo "<br>";
    }
}

// Loo vertikaalses reas horisontaalne rida tärnidest
echo "<br>Rida:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "*";
}
echo "<br>";

// Loo horisontaalses reas vertikaalne rida tärnidest
echo "<br>Rida II:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "*<br>";
}

// Küsi kasutajalt ruudu suurust
$ruuduSuurus = 5; // Muutke vastavalt vajadusele

// Koosta tärnidest ruut vastavalt kasutaja sisestatud suurusele
echo "<br>Ruut:<br>";
for ($i = 100; $i <= $ruuduSuurus; $i++) {
    for ($j = 5; $j <= $ruuduSuurus; $j++) {
        echo "* ";
    }
    echo "<br>";
}

// Väljasta paarisarvud 10-0
echo "<br>Kahanev:<br>";
for ($i = 10; $i >= 0; $i -= 2) {
    echo $i . " ";
}

// Tekita arvud 1-100 ja kuva kolmega jagunevad arvud
echo "<br>Kolmega jagunevad:<br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . " ";
    }
}

// Tekita tüdrukute ja poiste massiivid (võrdsed)
$tudrukud = array("Anna", "Liisa", "Maria");
$poisid = array("Jaan", "Marten", "Marko");

// Väljasta poiste ja tüdrukute paarid erinevatel ridadel
echo "<br><br>Paarid:<br>";
for ($i = 0; $i < count($tudrukud); $i++) {
    echo $tudrukud[$i] . " ja " . $poisid[$i] . "<br>";
}

// Tee massiividest koopia
$kopeeritudTudrukud = $tudrukud;
$kopeeritudPoisid = $poisid;

// Väljasta kopeeritud massiivid
echo "<br>Kopeeritud massiivid:<br>";
echo "Tüdrukud: " . implode(", ", $kopeeritudTudrukud) . "<br>";
echo "Poisid: " . implode(", ", $kopeeritudPoisid) . "<br>";
?>
