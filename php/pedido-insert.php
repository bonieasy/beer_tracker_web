<?php
    require_once('init.php');

    // pega os dados do formuário
    $cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : null;
    $cliente = isset($_POST['cliente']) ? $_POST['cliente'] : null;   
    $entrega = isset($_POST['entrega']) ? $_POST['entrega'] : null;   
    $total = isset($_POST['total']) ? $_POST['total'] : null;   
    $produtos = isset($_POST['produtos']) ? $_POST['produtos'] : null;
    
    // insere no banco
    $PDO = db_connect();

    $sqlPedido = "INSERT INTO pedido(data_pedido, data_entrega, cod_cliente, valor_pedido)
                  VALUES(DATE_FORMAT(NOW(), '%Y,%m,%d'), :entrega,
                  :cliente, :total)";

    $stmtPedido = $PDO->prepare($sqlPedido);
    $stmtPedido->bindParam(':entrega', $entrega, PDO::PARAM_STR);
    $stmtPedido->bindParam(':cliente', $cliente, PDO::PARAM_INT);
    $stmtPedido->bindParam(':total', $total, PDO::PARAM_INT);

    if($stmtPedido->execute()){
        $codPedido = $PDO->lastInsertId();
    } else {
        print_r($stmtPedido->errorInfo());
    }

    print_r($produtos);
    
?>