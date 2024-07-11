// Définir un tableau contenant les textes à afficher
var textes = [
  { texte: "WELCOM MY PRINCESS", classe: "Tstyle1" },
  { texte: "Prinzessin", classe: "Tstyle2" },
  { texte: "Benvenuta principessa", classe: "Tstyle3" },
  { texte: "Eu te amo, meu amor", classe: "Tstyle4" },
  { texte: "私はあなたを愛しています、私の愛", classe: "Tstyle4" },
  { texte: "te amo", classe: "Tstyle4" },
  { texte: "hello girl with little cheeks", classe: "Tstyle4" },
  { texte: "사랑해요", classe: "Tstyle4" },
  { texte: "Tu es ma lumière dans l'obscurité", classe: "Tstyle4" },
  { texte: "Ton amour illumine ma vie", classe: "Tstyle4" },
  { texte: "je t'aime exponentiel fois n^  ", classe: "Tstyle4" },
  { texte: "tes calins me transportes tres loins", classe: "Tstyle4" },
  { texte: "Hello bad girl", classe: "Tstyle4" },

];

// Fonction pour choisir aléatoirement un élément du tableau
function choisirTexteAleatoire(textes) {
  return textes[Math.floor(Math.random() * textes.length)];
}

// Fonction pour afficher le texte aléatoire et appliquer le style CSS avec un effet fondu
function afficherTexteAleatoire() {
  var h2Element = document.getElementById("selecti");
  h2Element.style.opacity = 0; // Réduire l'opacité pour l'effet fondu
  setTimeout(function() {
    var texteAleatoire = choisirTexteAleatoire(textes);
    h2Element.textContent = texteAleatoire.texte;
    h2Element.className = texteAleatoire.classe;
    h2Element.style.opacity = 1; // Restaurer l'opacité pour afficher le texte avec un effet fondu
  }, 500); // Délai de 500 millisecondes avant le changement de texte



}


  // Appeler la fonction pour afficher un texte aléatoire au chargement de la page


  function Lumière() {
    var div = document.querySelector('.border-blur');
    var shapes = ['circle', 'square', 'oval'];
    var colors = ['#ff0000', '#00ff00', '#0000ff', '#ffff00', '#ff00ff', '#00ffff' ,'#d3fd01ed' ];
    var widths = [20, 70, 10]; // Define your own widths here
    var heights = [50, 75, 10]; // Define your own heights here
    setInterval(function() {
      var randomShape = shapes[Math.floor(Math.random() * shapes.length)];
      var randomColor = colors[Math.floor(Math.random() * colors.length)];
      var randomWidth = widths[Math.floor(Math.random() * widths.length)];
      var randomHeight = heights[Math.floor(Math.random() * heights.length)];
      switch (randomShape) {
        case 'circle':
          div.style.borderRadius = '50%';
          break;
        case 'square':
          div.style.borderRadius = '0';
          break;
        case 'oval':
          div.style.borderRadius = '50% / 80%';
          break;
      }
      div.style.backgroundColor = randomColor;
      div.style.width = randomWidth + 'px';
      div.style.height = randomHeight + 'px';
    }, 1000); // Change shape, color, and size every 1 second
  }




  function showFullImage(image) {
    // Créer un élément d'image pour afficher l'image en taille complète
    var fullImage = document.createElement('img');
    fullImage.src = image.src;
    fullImage.style.width = '100%';
    fullImage.style.height = '100%';
   /* fullImage.style.margin= '5% 30%';*/
    fullImage.style.position = 'fixed';
    fullImage.style.top = '0';
    fullImage.style.left = '0';
    fullImage.style.zIndex = '99999';
    fullImage.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
    fullImage.style.cursor = 'pointer'; 

    // Fermer l'image lorsque l'utilisateur clique dessus
    fullImage.onclick = function() {
        fullImage.parentNode.removeChild(fullImage);
    };

    // Ajouter l'image au corps du document
    document.body.appendChild(fullImage);


  
  }


  function cadre () {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 20,
        effect: 'fade',
        loop: true,
        speed: 300,
        mousewheel: {
          invert: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true
        },
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
    });
  
    // Stockez le contenu de la div swiper-container dans une variable
  var swiperContent = document.getElementById('swiperContent').innerHTML;
  
  // Stockez le contenu dans le sessionStorage pour pouvoir le récupérer sur la deuxième page
  sessionStorage.setItem('swiperContent', swiperContent);
  
  };


  $(document).ready(function() {
    $(".onglet_card").on("mousedown", function(e) {
        var parentOffset = $(this).parent().offset();
        var relX = e.pageX - parentOffset.left;
        var relY = e.pageY - parentOffset.top;
        $(document).on("mousemove", function(e) {
            $(".fenetre").offset({
                top: e.pageY - relY,
                left: e.pageX - relX
            });
        });
    });

    $(document).on("mouseup", function() {
        $(document).off("mousemove");
    });
});



/*
// Appele la fonction loadContent() lorsque je clique "cadreImage"
document.getElementById("cadreImage").onclick = loadContent;*/


  window.onload = function() {
    Lumière();
    afficherTexteAleatoire();

  
    var h2Element = document.getElementById("selecti");
    h2Element.addEventListener("click", function() {
      afficherTexteAleatoire();
    });
  };


  


  
  