<?php
    require_once('init.php');

    // pega os dados do formuário
    $cod = isset($_POST['cod']) ? $_POST['cod'] : null;

    $PDO = db_connect();
    $sql = "SELECT nome_produto, preco_produto FROM produto 
            WHERE cod_produto = :cod";
    $stmt = $PDO->prepare($sql);
    $stmt->execute(array(':cod' => $cod));
    $produto = $stmt->fetch();

    if(!empty($produto)){
        echo("<tr>");
        echo("<td>".$produto['nome_produto']."</td>");
        echo("<td id='precoProduto'>".$produto['preco_produto']."</td>");
        echo("<td><input id='qtdProduto' type='text' oninput='calcTotal(this.value)'></td>");
        echo("<td><span id='total'></span></td>");
        echo("</tr>");        
    } else {
        print_r($cod);
    }
?>