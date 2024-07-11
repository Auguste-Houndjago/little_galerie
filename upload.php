<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Le fichier est une image - " . $check["mime"] . ".";
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "L'image ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " a été téléchargée. ";
            
        } else {
            echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";

        }
    } else {
        echo "Le fichier n'est pas une image.";
    }
}

header('location: index.php');


?>;




