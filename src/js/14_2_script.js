// JavaScript für 14.2 Aufgabe: 
// Laden von JSON Elementen mit AJAX

var stadt, ausgabe, req = new XMLHttpRequest();

function getCity() {
    const city = event.target.value;
    loadJSON(city);
}

// Überprüft ob eine Stadt eine Hauptstadt ist
function isCapital(city) {
    if (city.capital) {
        return 'the capital city of';
    }
    return 'a city of';
}

// Lädt die Daten per XMLHttpRequest
function loadJSON(city) {
    req.onreadystatechange = function() {
        if (req.readyState === 4) { // Anfrage hat funktioniert
            data = JSON.parse(req.response);

            const title = document.getElementById('titel');
            const content = document.getElementById('inhalt');

            // Die Daten auf der Seite anzeigen
            title.innerHTML = data.name;
            content.innerHTML = `${data.name} is ${isCapital(data)} ${data.state}` + 
            `with a metropolitan area of ${data.residents}. ${data.remark}`;
        }
    }

    req.open("GET", "../json/" + city + ".json");
    req.send();
}