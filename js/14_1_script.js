// Skript für die Aufgabe 14.1

function setzeFarbe(farbe) {
    if ("rot" === farbe) {
        document.getElementById("farbe").style.color = "#ff0000";
    } else if ("gruen" === farbe) {
        document.getElementById("farbe").style.color = "#008000";
    }
}

// Aufgabenteil b

function sternHinzu() {
    var img = document.createElement("img");
    img.src = "../grafiken/stern.png";
    var src = document.getElementById("sterne");
    src.appendChild(img);
}

function sternEntfernen() {
  var stern = document.getElementById("sterne");
  stern.removeChild(stern.childNodes[0]);
}