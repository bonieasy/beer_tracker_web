function addProduto() {

  var value = $("#selectProduto option:selected").val();

  $.ajax({
    type: "POST",
    url: "produtos-list-pedidos.php",
    data: { cod: value }
  }).done(function( json ) {
    $("#tableProdutos").last().append(json);
  });    
}