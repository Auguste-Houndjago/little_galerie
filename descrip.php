<?php
$mysqli = new mysqli('sql8.freesqldatabase.com', 'sql8719316', 'CG5cKW6suH', 'sql8719316', 3306);

// Vérification de la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['filename']) && isset($_POST['description'])) {
        $filename = $mysqli->real_escape_string($_POST['filename']);
        $description = $mysqli->real_escape_string($_POST['description']);

        // Insérer la description dans la base de données
        $query = "INSERT INTO descriptions (filename, description) VALUES ('$filename', '$description')";
        $mysqli->query($query);
    }
}
?>
