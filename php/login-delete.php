<?php 
require_once('init.php');

$codUsuario = $_POST['cod_usuario'];

    $PDO = db_connect();      
    $stmt = $PDO->prepare("DELETE FROM usuario where cod_usuario = :cod_usuario");
    $stmt->bindValue(':cod_usuario', $codUsuario);

    if ($stmt->execute()){
        header('refresh:0');
    }
    else{
        echo "Erro ao cadastrar";
        $response_array['status'] = $stmt->errorInfo();
    }
?>