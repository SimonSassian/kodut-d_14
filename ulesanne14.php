<?php
// Kataloog, kus asuvad pildid
$directory = 'pildid/';

// Leia kõik pildifailid kataloogist
$images = glob($directory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// Arv veergude kaupa pisipiltide kuvamiseks
$veergudeArv = 3;

echo "<div style='display: flex; flex-wrap: wrap;'>";

// Kuvame pisipildid
foreach ($images as $image) {
    echo "<div style='margin: 10px;'>";
    echo "<a href='$image' target='_blank'><img src='$image' width='100' height='100'></a>";
    echo "</div>";
}

echo "</div>";

?>
