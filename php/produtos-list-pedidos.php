<?php
    require_once('init.php');

    // pega os dados do formuário
    $cod = isset($_POST['cod']) ? $_POST['cod'] : null;

    $PDO = db_connect();
    $sql = "SELECT p.nome_produto, ip.preco_item FROM produto p 
            INNER JOIN item_pedido ip 
            ON ip.cod_produto = p.cod_produto
            INNER JOIN pedido pe 
            ON pe.cod_pedido = ip.cod_pedido WHERE p.cod_produto = :cod";
    $stmt = $PDO->prepare($sql);
    $stmt->execute(array(':cod' => $cod));
    $produto = $stmt->fetch();

    if(!empty($produto)){
        echo("<tr>");
        echo("<td>".$produto['nome_produto']."</td>");
        echo("<td>".$produto['preco_item']."</td>");
        echo("<td id='qtdProduto'><input type='number'></td>");
        echo("<td></td>");
        echo("</tr>");        
    } else {
        print_r($stmt->errorInfo());
    }
?>