$(document).ready(function(){
  $("#abteilung").change(function(){
    var abteilung = $(this).val();
    $("h1").text(abteilung + " Mitarbeiter");
    $.ajax({
      url: "get_table_data.php",
      method: "POST",
      data: {abteilung: abteilung},
      success: function(data){
        $("#mitarbeiter-tabelle tbody").html(data);
      }
    });
  });
});