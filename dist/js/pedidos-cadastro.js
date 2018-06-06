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

function calcTotal(val){
    $("#total").text(Number(val) * Number($("#precoProduto").text()));
}

$("#qtdProduto").ready(function(){
  $("#qtdProduto").inputmask({
                    alias: 'numeric', 
                    allowMinus: false,  
                    digits: 2, 
                    max: 999.99});
});