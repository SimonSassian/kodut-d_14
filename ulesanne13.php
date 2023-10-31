<!DOCTYPE html>
<html>
<head>
    <title>Pildi üleslaadimine ja vaatamine</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDir = "uploads/"; // Kataloog, kuhu pildid salvestatakse
    $allowedExtensions = ["jpg", "jpeg"]; // Luba ainult JPG ja JPEG failid

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    if (isset($_FILES["pilt"]) && $_FILES["pilt"]["error"] === 0) {
        $filename = $_FILES["pilt"]["name"];
        $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

        if (in_array($fileExtension, $allowedExtensions)) {
            $uploadPath = $uploadDir . basename($filename);

            if (move_uploaded_file($_FILES["pilt"]["tmp_name"], $uploadPath)) {
                echo "Pilt on edukalt üles laetud.<br>";

                // Kuvame pildi täies suuruses
                echo "<img src='$uploadPath' alt='Üleslaetud pilt' onclick='openImage(this.src)' style='cursor: pointer;'><br>";
            } else {
                echo "Pildi üleslaadimine ebaõnnestus.<br>";
            }
        } else {
            echo "Luba on ainult JPG ja JPEG failidele.<br>";
        }
    }
}

// JavaScript funktsioon pildi avamiseks täies suuruses
echo "<script>";
echo "function openImage(src) {";
echo "    var newWindow = window.open('', '_blank');";
echo "    newWindow.document.write('<img src=\"' + src + '\" alt=\"Pilt\">');";
echo "}";
echo "</script>";
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
    Vali pilt (JPG või JPEG): <input type="file" name="pilt" accept=".jpg, .jpeg" required><br>
    <input type="submit" value="Üles laadida">
</form>

</body>
</html>
