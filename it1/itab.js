var selectedInventarnummer = "";
  var selectedPersonalnummer = "";

    $(document).ready(function() {
      // Event-Handler für Klicks auf Zeilen in der linken Tabelle
      $('.left-table tbody').on('click', 'tr', function() {
        // Ausgewählten Wert ermitteln
        var inventarnummer = $(this).find('td:first').text();
		var bezeichnung = $(this).find('td:nth-child(2)').text();
        var beschreibung = $(this).find('td:nth-child(3)').text();
        // Ausgewählten Wert anzeigen
        $('.selected-inventarnummer').text('Ausgewählte Inventarnummer: ' + inventarnummer);
		$('.selected-bezeichnung').text('Ausgewähltes Modell: ' + bezeichnung);
        $('.selected-beschreibung').text('Hinweis: ' + beschreibung);
		selectedInventarnummer = inventarnummer;
	  });
      // Event-Handler für Klicks auf Zeilen in der rechten Tabelle
      $('.right-table tbody').on('click', 'tr', function() {
        // Ausgewählte Werte ermitteln
        var personalnummer = $(this).find('td:first').text();
        var name = $(this).find('td:nth-child(2)').text();
        var vorname = $(this).find('td:nth-child(3)').text();
        // Ausgewählte Werte anzeigen
        $('.selected-personalnummer').text('Ausgewählte Personalnummer: ' + personalnummer);
        $('.selected-name').text('Ausgewählter Name: ' + name);
        $('.selected-vorname').text('Ausgewählter Vorname: ' + vorname);
		selectedPersonalnummer = personalnummer;
      });
    });
	
	
	function sendData() {
  // JavaScript-Variablen definieren
		
		var datum1 = new Date(document.getElementById("von").value);
		var jahr1 = datum1.getFullYear();
		var monat1 = ("0" + (datum1.getMonth() + 1)).slice(-2);
		var tag1 = ("0" + datum1.getDate()).slice(-2);
		var datumFormatiert1 = jahr1 + "-" + monat1 + "-" + tag1;
		
		var datum2 = new Date(document.getElementById("bis").value);
		var jahr2 = datum2.getFullYear();
		var monat2 = ("0" + (datum2.getMonth() + 1)).slice(-2);
		var tag2 = ("0" + datum2.getDate()).slice(-2);
		var datumFormatiert2 = jahr2 + "-" + monat2 + "-" + tag2;
		
		if (!selectedInventarnummer || !selectedPersonalnummer || datumFormatiert1 === "NaN-aN-aN" || datumFormatiert2 === "NaN-aN-aN") {
			alert('Bitte füllen Sie alle Felder aus!');
			return;
		}
		
		alert("Eintrag wurde der Datenbank hinzugefügt");
		// AJAX-Objekt erstellen
		var xhttp = new XMLHttpRequest();
		// AJAX-Anfrage senden
		xhttp.open("POST", "formular_verarbeitung.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("inventarnummer=" + selectedInventarnummer + "&personalnummer=" + selectedPersonalnummer + "&datum1=" + datumFormatiert1 + "&datum2=" + datumFormatiert2);
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

$(document).ready(function(){
    $.ajax({
      url: "getPersonal.php",
      method: "POST",
      success: function(data){
        $("#personaltabelle tbody").html(data);
      }
    });
});