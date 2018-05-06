var value;

function changeValue(){
  value = $('#selectProduto').val();
}

function addProduto() {
    $.ajax({
     type: "POST",
     url: "produtos-list-pedidos.php",
     data: { cod: value }
   }).done(function( json ) {
     
   });    
}