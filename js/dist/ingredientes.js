function deleteIngrediente(codIngrediente){
    $.ajax({
    type: "POST",
    url: "ingredientes-delete.php",
    data: { cod: codIngrediente }
    }).done(function() {
        $("#main").load("ingredientes.php");
    });
};