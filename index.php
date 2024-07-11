<!DOCTYPE html>
<html id="index_html" lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemple de page PHP avec JavaScript</title>

  <script src="page_galerie.js" defer ></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->
<link rel="stylesheet" href="fontawesome-free-6.5.1-web\css/all.css">

<link rel="stylesheet" href="indispensable/reset.min.css">
<script src="indispensable/jquery-3.7.1.min.js"> </script>

  <link rel="stylesheet" href="style_page2.css">
</head>

  <style>
  #index_html{
  border:  2px blue solid ;
  border-radius: 2px;
  height: 100vh;

}

.navigation{
  box-shadow: 0 0 10px rgba(0, 0, 255, 0.5);

  animation: pulse 5s infinite alternate;
  


}

@keyframes pulse {
   0% {
       box-shadow: 0 0 20px rgba(0, 0, 255, 0.7); /* Bleu */
      
   }

   20%{
    box-shadow: 0 0 30px rgba(255, 255, 255, 0.155); /* Blanc special */
   }

   
   40% {
    box-shadow: 0 0 25px rgba(255, 255, 255, 0.7); /* Rose */
       
   }

   60%{
    box-shadow: 0 0 25px rgba(255, 255, 255, 0.180); /* Blanc */
   }
   

   80% {
       box-shadow: 0 0 40px rgba(255, 255, 0, 0.7); /* Jaune */
      
   }

   85%{
    box-shadow: 0 0 25px rgba(255, 255, 255, 0.180); /* Blanc */
   }
   
   100% {
      box-shadow: 0 0 30px rgba(255, 0, 0, 0.5); /* Rouge */
   }
   
}

    #index_body{
      display: block;
   
      margin: 20px 30px;
      
      background-color:  #C0C0C0;
      background-size: cover;
  
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
   
      width: 100%;
      cursor: pointer;
      
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
      cursor: pointer;
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
      transition: 1.5s transform;
      

      
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
      border: 4px groove #28272686;
      padding-top: 10px;
      padding-left: 10px;
      padding-right: 10px;
      padding-bottom: 25vh;
     /* background-image: url(image/Rose-19299-ezgif.com-video-to-gif-converter.gif);
      background-size: contain;
      background-repeat: no-repeat; */
      background-image: url(image/fond2.jpg);
      background-repeat: no-repeat;
      background-position: 100% 50%;

      
    }




  .imgbox{
    position: absolute;
    width: 100%;
    height: 100%;
  }

.box:hover{
z-index: 999;
transform: scale(1.03);
opacity: 1;


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





.super_container{
 display: block;
 
}

.cadre1{
  box-shadow: 0 0 0 4px rgba(135, 206, 235, 0.5); /* Couleur bleu ciel avec une opacité de 50% */
  background-color: rgba(125, 60, 186, 0.886);
  background-image: url(image/CGjn.gif);
  border-radius: 1.5px;
  background-position: 50% 90%;
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
      animation: jaime 2s alternate 0s infinite forwards ease-in;
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

textarea {
  width: 100px;
  height: 80px;
  padding: 8px 6px;
  box-sizing:border-box;
  border: 2px solid blueviolet ;
  
  border-radius: 4px;
  background-color: #6cbaf594;
  font-size: 12px;
  resize: none;
  outline: yellow;
  
}

.com{
  position: absolute;
  right: 4px;
}

.comm{
  right: 4px;
}

.saveI{
  position: absolute;
  width: 20px;
  height: 20px;
  pointer-events: none;
}

.save{
  z-index: 4;
  width: 20px;
  height: 20px;
  opacity: 0 ;
  cursor:pointer;
}

.sp{
  position: relative;
  display: flex;

}

.headp{
  height: 80px;
  position: relative;
  border: 1px blueviolet solid;
}


#mini-card{
   width: 422px;
   height: 422px;
   position: absolute;
   z-index: 99999999;
   border: 4px solid red ;
   border-radius: 14px;
   left: 0;
 }

 .fenetre{
  position: absolute;
  width: 422px;
   height: 450px;
   position: absolute;
   z-index: 99999;

   border-radius: 14px;
   scale: 0.8;

 }

 .onglet_card{
  height: 28px;
  width: 422px;
  border: 4px solid rgba(255, 217, 0, 0.816) ;
 }


  </style>
<body id="index_body" >
  <div class="super_container">

  

<form action="upload.php" method="post" enctype="multipart/form-data">

<?php
  require("navigation.php");
  
?>
  
  </div>
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
$mysqli = new mysqli('localhost', 'root', '', 'galerie');

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
<div class='container'>
<?php
$dir = 'images/';
$files = scandir($dir);

usort($files, function($a , $b) use ($dir) {
  return filemtime($dir . $b) - filemtime($dir . $a);
} );

foreach($files as $file) {
    if($file == '.' || $file == '..') continue;
?>
    <div class='box'>  
        <span class='imgbox'> 
            <img class='img' src='images/<?php echo $file; ?>' width='200' height='200'  onclick='showFullImage(this)' >
            <img class='jaime coeur' src='image/heat1.svg' alt='❤' width='50' height='50' srcset=''>
            <img class='com' src='image/lettre.png' alt='📜' width='30' height='30' srcset=''  >
        </span> 
        <div class='comm'  style=' position: absolute ; display:none'  > 
    <form name="des" action='index.php' method='POST'>
        <textarea class='description' name='description' rows='10' cols='5'>
<?php
    // Charger la description depuis la base de données
    $query = "SELECT description FROM descriptions WHERE filename = '$file'";
    $result = $mysqli->query($query);
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['description'];
    }
?>
        </textarea>
        <input type='hidden' name='filename' value='<?php echo $file; ?>'>
        <span class="sp"   > 
        <input class="save" type='submit' value='Save'>
          <img class="saveI" src="image/sms.png" alt="💾">
        </span>
    </form>
</div>



        <form action='delete.php' method='POST'>
            <span id='remove' >
                <input type='hidden' name='filename' value='<?php echo $file; ?>'>
                <input type='hidden' name='description'>
                <input id='delette' type='submit' value='Supprimer'>
                <img id='imgRemove' src='image/trash.svg' alt='💾' srcset=''>
            </span>
        </form>
    </div>
    <div class='bor'></div>
<?php
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['filename']) && isset($_POST['description'])) {
  $filename = $_POST['filename'];
  $description = $_POST['description'];

  // Enregistrer la description dans la base de données
  $query = "UPDATE descriptions SET description = '$description' WHERE filename = '$filename'";
  $mysqli->query($query);
}

?>

<div class="fenetre">


<div class="onglet_card" > haha </div>
<div id="mini-card" >
    <?php 
    require("card_galerie.php");
    ?>
</div>

</div>

<!-- <script src="loadContent.js"></script> -->

<script>


var boutonsJaime = document.querySelectorAll('.coeur');


boutonsJaime.forEach(function(boutonJaime) {
    boutonJaime.addEventListener('click', function() {
        
        boutonJaime.classList.add('clicked');
        boutonJaime.classList.add('choice');

       
        setTimeout(function() {
            boutonJaime.classList.remove('clicked');
        }, 300);
    });
});



var upimg = document.querySelectorAll('.img');
var upbox = document.querySelectorAll('.box');

upimg.forEach(function(upimg1, index) {
    upimg1.addEventListener('click', function() {

        if (upimg1.classList.contains('clicimg')) {
            upimg1.classList.remove('clicimg');
        } else {
            upimg1.classList.add('clicimg');
            upimg1.classList.add('choice');


            if (upbox[index].classList.contains('clicbox')) {
                upbox[index].classList.remove('clicbox');
            } else {
                upbox[index].classList.add('clicbox');
            }

  
            setTimeout(function() {
                upimg1.classList.remove('clicimg');
                upbox[index].classList.remove('clicbox');
            }, 300); // 30 secondes
        }
    });
});





// Récupérer tous les éléments avec la classe 'com'
var elementsCom = document.querySelectorAll('.com');

elementsCom.forEach(function(elementCom) {
    elementCom.addEventListener('click', function() {
        var comm = elementCom.parentElement.nextElementSibling;
        if (comm.style.display === "none") {
            comm.style.display = "flex";
        } else {
            comm.style.display = "none";
        }
    });
});





</script>



</body>

</html>
