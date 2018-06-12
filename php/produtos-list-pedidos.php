<?php
    require_once('init.php');

    // pega os dados do formuário
    $cod = isset($_POST['cod']) ? $_POST['cod'] : null;

    $PDO = db_connect();
    $sql = "SELECT cod_produto, nome_produto, preco_produto FROM produto 
            WHERE cod_produto = :cod";
    $stmt = $PDO->prepare($sql);
    $stmt->execute(array(':cod' => $cod));
    $produto = $stmt->fetch();
    $precoProduto = str_replace(".", ",", $produto['preco_produto']);

    if(!empty($produto)){
        echo("<tr>");
        echo("<td class='align-middle text-center' id='cod_produto'>".$produto['cod_produto']."</td>");
        echo("<td class='align-middle text-center'>".$produto['nome_produto']."</td>");
        echo("<td class='align-middle text-center' id='precoProduto'>R$ ".$precoProduto."</td>");
        echo("<td class='align-middle text-center'><input class='form-control' id='qtdProduto' oninput='calcTotal(this.value, ".$produto['preco_produto'].")'></td>");
        echo("<td class='align-middle text-center'><span id='total'>R$ 0,00</span></td>");
        echo("</tr>");        
    } else {
        print_r($cod);
    }
?>