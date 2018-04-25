<?php 
require_once('init.php');

$codUsuario = $_POST['cod_usuario'];

    $PDO = db_connect();
    $stmt = $PDO->prepare("DELETE FROM usuario where cod_usuario = :cod_usuario");
    $stmt->bindParam(':cod_usuario', $codUsuario, PDO::PARAM_INT);

    if ($stmt->execute()){
        header('refresh:0');
    }
    else{
        $response_array['status'] = $stmt->errorInfo();
    }