<!DOCTYPE html>
<html  class="card_html" lang="en" >
<head>
  <meta charset="UTF-8">
  <title>galerie card</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="indispensable/normalize.min.css">
  <link rel="stylesheet" href="card_galerie.css">
</head>

<?php
$dir = 'images/';
$files = scandir($dir);

// Connexion à la base de données
$mysqli = new mysqli('sql8.freesqldatabase.com', 'sql8719316', 'CG5cKW6suH', 'sql8719316', 3306);

// Vérification de la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
}
?>

<body class="card_body" >
    <div class="swiper-container"  id="swiperContent" >
        <div class="swiper-wrapper">
            <?php
            foreach($files as $file) {
                if($file == '.' || $file == '..') continue;

                // Charger la description depuis la base de données
                $query = "SELECT description FROM descriptions WHERE filename = '$file'";
                $result = $mysqli->query($query);
                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $description = $row['description'];
                } else {
                    $description = ''; // Définir une description vide si aucune n'est trouvée
                }
            ?>
                    <div class="slider-item swiper-slide">
                        <div class="slider-image-wrapper">
                            <img class="slider-image" src="<?php echo $dir . $file; ?>" alt="SliderImg">
                        </div>
                        <div class="slider-item-content">
                            <h1>WELCOME PREPRE</h1>
                            <p class="description"><?php echo $description; ?></p>
                        </div>
                    </div>
            <?php
            }
            ?>
        </div>

        <div class="slider-buttons">
            <a href="index.php">home page</a>
            <button class="swiper-button-prev">Prev</button>
            <button class="swiper-button-next">Next</button>
        </div>

        <div class="swiper-pagination"></div>
    </div>

    <script src="indispensable/jquery.min.js"></script>
    <script src="indispensable/swiper-bundle.min.js"></script>
    <script src="galerie_card.js"></script>
</body>
</html>
