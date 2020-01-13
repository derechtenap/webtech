// JavaScript für 14.2 Aufgabe: 
// Laden von JSON Elementen mit AJAX
var stadt, ausgabe;
var anfrage = new XMLHttpRequest();

function ladeStadt() {
    stadt = event.target.value;
    ladeDaten(stadt);
}

function ladeDaten(x) {
    anfrage.onreadystatechange = function() {
        if (anfrage.readyState === 4) {
            ausgabe = JSON.parse(anfrage.response);
            console.log(anfrage.response);
            document.getElementById("titel").innerHTML = ausgabe.name;
            document.getElementById("inhalt").innerHTML = ausgabe.remark;
        }
    }
    anfrage.open("GET", "../json/" + x + ".json");
    anfrage.send();
}
