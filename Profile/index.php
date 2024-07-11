<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemple de page PHP avec JavaScript</title>

  <script src="page_galerie.js" defer ></script>

  <link rel="stylesheet" href="styles.css">
</head>

  <style>

    body{
      display: block;
   
      margin: 20px 30px;
    }

    .imputh{
      display:flex;
      justify-content: center;
      align-items: center;
      margin: 8px 8px;
    }

    #fileToUpload{
      height: 100%;
      border: 3px red solid;
      z-index:22;
      position: relative;
      width: 100%;
      opacity: 0;
    }

    .imput_up{
      height: 40px;
      position:relative;
      width: 40px;
     
     display: flex;
     justify-content: center;

     left: -30%;
    }

    #up_img{
      height: 100%;
      position:absolute;
      z-index: -2;
      pointer-events: none ;
      width: 100%;
      
    }

    @keyframes rotation1{
      0%{
        transform: rotate(0deg);
      }



      30%{
        transform: rotate(190deg);
      }

      50%{
          opacity: 0.5;
          transform: rotate(360deg);
      }

      60%{
        opacity: 1;
      }

      80%{
        transform: rotate(90deg);
        opacity: 0.5;
      }
      85%{
        opacity: 1;
      }

      100%{
    transform: rotate(160deg);
  }
      
    }

    .plus{
      height: 30%;
      position: absolute;
      z-index: 40;
      width: 30%;
      right: 0px;
      bottom: 0px;
  
      animation: rotation1 10s ease-out 0s alternate forwards infinite;
    
    }

    .plus:hover{
      animation: clips 1s ease 0  alternate-reverse  ;
      animation-iteration-count: 5;
    }

    @keyframes clips {

50%{
  opacity: 0.2;
}
    }

    .imgbox{
      height: 100%;
      width: 100%;
    }

    .box{
      position: relative;
      display: flex ;
      justify-content: center;
      align-items: center;
      margin-right: 4px;
      background-color: rgba(0, 0, 0, 0.75);
      height: 205px;
      width: 205px;
      border-radius: 5px;
      background-image: url(image/etoile8.webp);
      opacity: 0.9;
      transition: 3s;
      overflow: hidden;
      
    }

    .border-blur::before,
    .border-blur::after {
  border-radius: 50%;
  height: 250px !important;
  width: 250px !important;
  mix-blend-mode: multiply;
  z-index: -2;
  }

.box::after
/*, .border-blur::after*/ {
  content: "";
  position: absolute;
  width: 50px;
  height: 280px;
  background-image: conic-gradient(
    transparent,
    transparent,
    transparent,
    #d400d4
  );
  animation: animate 6s linear infinite reverse;
  animation-delay: -2.80s;
  z-index: -2;
}


.box::before
/*,.border-blur::before*/ {
  content: "";
  position: absolute;
  width: 50px;
  height: 280px;
  background-image: conic-gradient(
    transparent,
    transparent,
    transparent,
    #00ccff
  );




  z-index: -2;
  animation: animate 6s linear infinite;
}


@keyframes animate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

    .container{
      display: flex;
      flex-wrap: wrap;
    }

.imgbox{
  position: absolute;
  width: 100%;
  height: 100%;
}

.img{
  display: flex;
  position: absolute;
  left: 1%;
  bottom: 1%;
}

#delette{
  z-index: 44;
  position: absolute;
  bottom: 3%;
}

html{
  border:  2px blue solid ;
  border-radius: 2px;
  height: 100vh;
}

body{
  /*background-image: url(image/Rose-19299-ezgif.com-video-to-gif-converter.gif) ;*/
  background-color:  #C0C0C0;
  background-size: cover;
}

.super_container{
 display: block;
  border: 2px red solid ;
}

.cadre1{
  box-shadow: 0 0 0 4px rgba(135, 206, 235, 0.5); /* Couleur bleu ciel avec une opacité de 50% */
  background-color: rgba(125, 60, 186, 0.886);
  background-image: url(image/CGjn.gif);
  border-radius: 1.5px;
}

#selecti{
      text-align: center;
      color: beige;
      
      transition: opacity 0.5s ease-in-out; 
      z-index: 10;

      -webkit-text-stroke: 0.5px rgba(239, 60, 84, 0.886); /* contour de 1 pixel de couleur bleue */
    color: white /* couleur du texte à l'intérieur du contour */
    }

    .jaime{
      position: absolute;
      z-index: 11;
      cursor: pointer;
      animation: jaime 3s alternate 0s infinite forwards ease-in;
      transition: 2s;
      
    }



    .com{
      position: absolute;
      z-index: 11;
      right: 2px;
      cursor: pointer;
    }

   /* @keyframes jaime {
      form {
        filter: grayscale(100%);
      }

      to{
        opacity: 0.8;
      }
    }*/

    #remove{
      display: block;
      width: 30px;
      height: 30px;
    }
    #delette{
      width: 30px;
      height: 30px;
      right: 10px;
      opacity: 0;
      cursor:pointer;

    
    }

    #imgRemove{
    position: absolute;
      display: block;
      width: 30px;
      height: 30px;
      right: 10px;
      z-index: 1;
      pointer-events: none;
      bottom: 4px;
      
      
    }

    .jaime.clicked{
      transform: scale(1.5);
      opacity: 0;

    }

    .comment-form {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    background-color: rgba(255, 255, 255, 0.9);
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
}

.comment-form textarea {
    width: 200px;
    height: 100px;
    resize: none;
    margin-bottom: 10px;
}

.comment-form .comment-submit {
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}


.description-container{
  display: block;
  background-color: #007bff;

  position: absolute;
  width: 100px;
}


  </style>
<body>
  <div class="super_container">

  

<form action="upload.php" method="post" enctype="multipart/form-data">
<div class="cadre1">
  <h2 id="selecti">WELCOM MY PRINCESS :</h2>
</div>



    <div class="imputh">
      <div class="imput_up">
      <input type="file" name="fileToUpload" id="fileToUpload" aria-label="choisi">
      <img class="up_img" id="up_img" src="image/image photo.svg" alt="">
      <img class="plus" id="plus" src="image/plus (1).png" alt="">
      </div>
   
    <input type="submit" value="Télécharger l'image" name="submit">
    </div>
  
</form>


<?php
echo "<div class='container'>";

$dir = 'images/';
$files = scandir($dir);
foreach($files as $file) {
  if($file == '.' || $file == '..') continue;
  echo "<div class='box'>  
          <span class='imgbox'> 
            <img class='img' src='images/$file' width='200' height='200'>
            <img class='jaime' src='image/heat1.svg' alt='❤' width='50' height='50' srcset=''>
            <img class='com' src='image/lettre.png' alt='📜' width='40' height='40' srcset=''>
          </span> 
          <div class='description-container' <--!style='display:none;'--> >
            <form action='save_description.php' method='POST'>
              <textarea name='description' rows='4' cols='50' maxlength='800'></textarea>
              <input type='hidden' name='filename' value='$file'>
              <input type='submit' value='Enregistrer'>
            </form>
          </div>
          <form action='delete.php' method='POST'>
            <span id='remove' >
              <input type='hidden' name='filename' value='$file'>
              <input id='delette' type='submit' value='Supprimer'>
              <img id='imgRemove' src='image/trash.svg' alt='💾' srcset=''>
            </span>
          </form>
        </div>
        <div class='bor'></div>";
};

echo "</div>";
?>




</div>

<script>
// Récupérer tous les éléments avec la classe 'coeur'
var boutonsJaime = document.querySelectorAll('.coeur');

// Parcourir tous les éléments et ajouter un gestionnaire d'événement pour le clic
boutonsJaime.forEach(function(boutonJaime) {
    boutonJaime.addEventListener('click', function() {
        // Ajouter la classe "clicked" pour déclencher l'animation
        boutonJaime.classList.add('clicked');
        boutonJaime.classList.add('choice');

        // Supprimer la classe "clicked" après un court délai pour réinitialiser l'état
        setTimeout(function() {
            boutonJaime.classList.remove('clicked');
        }, 300); // Délai correspondant à la durée de l'animation en millisecondes (0.3s = 300ms)
    });
});


// Récupérer tous les éléments avec la classe 'com'
var elementsCom = document.querySelectorAll('.com');

elementsCom.forEach(function(elementCom) {
    elementCom.addEventListener('click', function() {
        var descriptionContainer = elementCom.parentElement.nextElementSibling;
        if (descriptionContainer.style.display === "none") {
            descriptionContainer.style.display = "block";
        } else {
            descriptionContainer.style.display = "none";
        }
    });
});



</script>



</body>

</html>
