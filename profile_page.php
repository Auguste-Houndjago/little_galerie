
<?php
session_start();
$profile_pic = isset($_SESSION['profile_pic']) ? "Profile/Profile_pics/" . $_SESSION['profile_pic'] : "image/user-profile-4255.svg";
?>

<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8">
    <title>profile upload</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="indispensable/font-awesome.min.css">
  </head>
<body>

<form action="profile.php" method="post" enctype="multipart/form-data">
  <div class="upload">
    <img id="profle_pic" src="<?php echo $profile_pic; ?>" width = 100 height = 100 alt="">
    <div class="round">
      <input name="profile_choice" id="profile_choice" type="file">
      <i  class = "fa fa-camera" style = "color: #fff;"></i>
    </div>
  </div>
  <input type="submit" value="Mettre à jour l'image de profil" name="submit">
</form>

<script>
document.getElementById("profile_choice").onchange = function () {
    let reader = new FileReader();

    reader.onload = function (e) {
        // Mettre à jour l'image de profil
        document.getElementById("profle_pic").src = e.target.result;
    };

    // lire le fichier image en tant que URL de données.
    reader.readAsDataURL(this.files[0]);
};
</script>

</body>
</html>

