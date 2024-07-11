<?php
$servername = "sql8.freesqldatabase.com";
$username = "sql8719316";
$password = "CG5cKW6suH";
$dbname = "sql8719316";
$port = 3306;


// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$sql = "CREATE TABLE ImageText (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  image VARCHAR(30) NOT NULL,
  text TEXT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table ImageText created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
?>

<?php
$image = $file; // le nom de l'image
$text = $_POST['text']; // le texte soumis par l'utilisateur

$sql = "INSERT INTO ImageText (image, text)
VALUES ('$image', '$text')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<?php
$conn->close();
?>
