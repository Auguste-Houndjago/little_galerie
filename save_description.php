<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_POST['filename'];
    $description = $_POST['description'];

    $descriptionFile = fopen("description/$filename.txt", "w") or die("Impossible d'ouvrir le fichier !");
    fwrite($descriptionFile, $description);
    fclose($descriptionFile);

    header("Location: index.php");
    exit();
}
?>;