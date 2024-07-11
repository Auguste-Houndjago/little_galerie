// loadContent.js

function loadContent() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "galerie_card.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Récupérez le contenu de galerie_card.php
            var content = xhr.responseText;
            
            // Insérez le contenu dans la div #contentContainer
            document.getElementById("contentContainer").innerHTML = content;
        }
    };
    xhr.send();
}

// Appelez la fonction loadContent() lorsque vous cliquez sur l'élément "cadreImage"
document.getElementById("cadreImage").onclick = loadContent;
