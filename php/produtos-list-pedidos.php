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
        echo("<td class='align-middle'>".$produto['nome_produto']."</td>");
        echo("<td class='align-middle' id='precoProduto'>".$produto['preco_produto']."</td>");
        echo("<td class='align-middle'><input class='form-control' type='number' id='qtdProduto' oninput='calcTotal(this.value)'></td>");
        echo("<td class='align-middle'><span id='total'></span></td>");
        echo("</tr>");        
    } else {
        print_r($cod);
    }
?>