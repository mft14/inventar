//search function
$("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("table tr").filter(function(index) {
        if(index>0){ $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1) }
    });
}); //end keyup
