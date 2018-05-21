function deletePedido(codPedido){
    $.ajax({
    type: "POST",
    url: "pedido-delete.php",
    data: { cod: codPedido }
    }).done(function(cod) {
        $("#main").load("pedidos.php");
    });
};