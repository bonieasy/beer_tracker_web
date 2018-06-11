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
                  VALUES(DATE_FORMAT(NOW(), '%Y,%m,%d'), STR_TO_DATE(:entrega, '%Y/%m/%d'),
                  :cliente, :total)";

    $stmtPedido = $PDO->prepare($sqlPedido);
    $stmtPedido->bindParam(':entrega', $entrega, PDO::PARAM_STR);
    $stmtPedido->bindParam(':cliente', $cliente, PDO::PARAM_INT);
    $stmtPedido->bindParam(':total', $total, PDO::PARAM_INT);

    if($stmtPedido->execute()){
        $codPedido = $PDO->lastInsertId();
    } else {
        echo($stmtPedido->errorInfo());
    }

    foreach($produtos as $produto){}
    $sqlItemPedido = "INSERT INTO item_pedido(cod_cliente, descricao_ingrediente) VALUES(:nome, :descricao)";

    $stmtItemPedido = $PDO->prepare($sqlItemPedido);
    $stmtItemPedido->bindParam(':cod_pedido', $codPedido);
    $stmtItemPedido->bindParam(':cod_produto', $produto['cod_produto']);

    if ($stmt->execute()){
        header('Location: ingredientes.php');
    }
    else{
        echo "Erro ao cadastrar";
        print_r($stmt->errorInfo());
    }
?>