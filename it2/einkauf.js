var selectedInventarnummer = "";
function populateDropdown() {
		var xhr = new XMLHttpRequest();
		var url = "getModell.php";
		xhr.open("POST", url, true);
		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4 && xhr.status === 200) {
				var options = JSON.parse(xhr.responseText);
				var dropdown = document.getElementById("modellDropdown");
				for (var i = 0; i < options.length; i++) {
					var option = document.createElement("option");
					option.text = options[i];
					option.value = options[i];
					dropdown.add(option);
				}
			}
		};
		xhr.send();
	}
	
function populateDropdownRaum() {
		var xhr = new XMLHttpRequest();
		var url = "getRaum.php";
		xhr.open("POST", url, true);
		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4 && xhr.status === 200) {
				var options = JSON.parse(xhr.responseText);
				var dropdown = document.getElementById("raumDropdown");
				for (var i = 0; i < options.length; i++) {
					var option = document.createElement("option");
					option.text = options[i];
					option.value = options[i];
					dropdown.add(option);
				}
			}
		};
		xhr.send();
	}
			
function sendData() {
	var datum = new Date(document.getElementById("datum").value);
		var jahr = datum.getFullYear();	
		var monat = ("0" + (datum.getMonth() + 1)).slice(-2);
		var tag = ("0" + datum.getDate()).slice(-2);
		var datumFormatiert = jahr + "-" + monat + "-" + tag;
		
	var preis = document.getElementById("preis").value;
	var seriennummer = document.getElementById("seriennummer").value;
	var anmerkung  = document.getElementById("anmerkung").value;
	var modell  = document.getElementById("modellDropdown").value;
	var raumbezeichnung  = document.getElementById("raumDropdown").value;
		
		if (!seriennummer || !modell || !raumbezeichnung) {
			alert('Bitte füllen Sie mindestens die Felder: Seriennummer, Modell und Raum aus!');
			return;
		}	
	// AJAX-Objekt erstellen
	var xhttp = new XMLHttpRequest();
	// AJAX-Anfrage senden
	xhttp.open("POST", "inventar_einfuegen.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("datum=" + datumFormatiert + "&preis=" + preis + "&seriennummer=" + seriennummer + "&anmerkung=" + anmerkung + "&modell=" + modell + "&raumbezeichnung=" + raumbezeichnung);
	alert("Datensatz erfolgreich eingefügt");
}

$(document).ready(function(){
    $.ajax({
      url: "getInventar.php",
      method: "POST",
      success: function(data){
        $("#inventartabelle tbody").html(data);
      }
    });
});

$(document).ready(function() {
      // Event-Handler für Klicks auf Zeilen in der linken Tabelle
      $('.left-table tbody').on('click', 'tr', function() {
        // Ausgewählten Wert ermitteln
        var inventarnummer = $(this).find('td:first').text();
		var seriennummer = $(this).find('td:nth-child(2)').text();
        var anmerkung = $(this).find('td:nth-child(3)').text();
        // Ausgewählten Wert anzeigen
        $('.selected-inventarnummer').text('Ausgewählte Inventarnummer: ' + inventarnummer);
		$('.selected-seriennummer').text('Ausgewählte Seriennummer: ' + seriennummer);
        $('.selected-anmerkung').text('Anmerkung: ' + anmerkung);
		selectedInventarnummer = inventarnummer;
	  });
	});
	
function sendDataEntfernen() {
		if (!selectedInventarnummer) {
			alert('Bitte wählen Sie erst ein Gerät aus welches entfernt werden soll!');
			return;
		}	
	// AJAX-Objekt erstellen
	var xhttp = new XMLHttpRequest();
	// AJAX-Anfrage senden
	xhttp.open("POST", "inventar_entfernen.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("inventarnummer=" + selectedInventarnummer);
	alert("Datensatz erfolgreich entfernt");
}