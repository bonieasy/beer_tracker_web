<?php
    require_once('init.php');

    // pega os dados do formuário
    $name = isset($_POST['nome']) ? $_POST['nome'] : null;
    $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;   

    if (empty($name) || empty($descricao))
    {
        echo "Volte e preencha todos os campos";
        exit;
    }

    // insere no banco
    $PDO = db_connect();
    $sql = "INSERT INTO pedido(cod_cliente, descricao_ingrediente) VALUES(:nome, :descricao)";
    $sql = "INSERT INTO pedido(cod_cliente, descricao_ingrediente) VALUES(:nome, :descricao)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':nome', $name);
    $stmt->bindParam(':descricao', $descricao);

    if ($stmt->execute()){
        header('Location: ingredientes.php');
    }
    else{
        echo "Erro ao cadastrar";
        print_r($stmt->errorInfo());
    }
?>