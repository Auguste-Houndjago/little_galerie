<?php
session_start();

$target_dir = "Profile/Profile_pics/";
$target_file = $target_dir . basename($_FILES["profile_choice"]["name"]);

if(isset($_POST["submit"])) {
    if (move_uploaded_file($_FILES["profile_choice"]["tmp_name"], $target_file)) {
        // Enregistrer le nom du fichier de l'image dans une session
        $_SESSION['profile_pic'] = basename($_FILES["profile_choice"]["name"]);
        echo "L'image de profil a été mise à jour.";
    } else {
        echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
    }
}
?>;
