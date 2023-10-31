<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dokumendiga Veebileht</title>
    <!-- Lisatud Bootstrapi lingid -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Tervitus dokumendiga veebilehel</h1>
    
    <?php
    // Kontrollime, milline dokument kuvatakse URL-i järgi
    $dokumendinimi = $_GET['document'] ?? '';

    // Kui dokumenti ei eksisteeri, teavita kasutajat
    if (!file_exists("$dokumendinimi.php")) {
        echo "<p>Dokumenti '$dokumendinimi' ei eksisteeri.</p>";
    } else {
        // Kui dokument on olemas, kuvame selle
        include("$dokumendinimi.php");
    }
    ?>
</body>
</html>
