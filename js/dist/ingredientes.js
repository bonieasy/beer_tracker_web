function deleteIngrediente(codIngrediente){
    $.ajax({
    type: "POST",
    url: "ingredientes-delete.php",
    data: { cod: codIngrediente }
    }).done(function() {
        $("#main").load("ingredientes.php");
    });
};

function editIngrediente(){
    var cod = $("#ingredienteCod").val()
    var nome = $("#ingredienteNome").val()
    var descricao = $("#ingredienteDescricao").val()

    $.ajax({
    type: "POST",
    url: "ingredientes-edit.php",
    data: { cod: cod, nome: nome, descricao: descricao }
    }).done(function(response) {
        alert(response)
        $("#main").load("ingredientes.php");
    });
};

$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('cod')
    var nome = button.data('nome')

    var modal = $(this)
    modal.find('.modal-title').text('Editar ' + nome)
    modal.find('#ingredienteCod').val(recipient)
    modal.find('#ingredienteNome').val(nome)
  })