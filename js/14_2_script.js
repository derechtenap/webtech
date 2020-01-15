// JavaScript für 14.2 Aufgabe: 
// Laden von JSON Elementen mit AJAX

var stadt, ausgabe, anfrage = new XMLHttpRequest();

function ladeStadt() {
    stadt = event.target.value;
    ladeDaten(stadt);
}

function istHauptsadt(inpJSON) {
    if (inpJSON.capital === true) {
        return "the capital city of";
    }
    return "a city of";
}

function ladeDaten(stadt) {
    anfrage.onreadystatechange = function() {
        if (anfrage.readyState === 4) {
            ausgabe = JSON.parse(anfrage.response);
            console.log(anfrage.response);
            document.getElementById("titel").innerHTML = ausgabe.name;
            document.getElementById("inhalt").innerHTML = ausgabe.name + 
            " is " + istHauptsadt(ausgabe) + " " + ausgabe.state + 
            " with a metropolitan area of " + ausgabe.residents + ". " + 
            ausgabe.remark;
        }
    }
    anfrage.open("GET", "../json/" + stadt + ".json");
    anfrage.send();
}