<?php 
require_once('init.php');

$codIngrediente = $_POST['cod'];

    $PDO = db_connect();
    $stmt = $PDO->prepare("DELETE FROM ingrediente where cod_ingrediente = :cod");
    $stmt->bindParam(':cod', $codIngrediente, PDO::PARAM_INT);

    if ($stmt->execute()){
        header('refresh:0');
    }
    else{
        $response_array['status'] = $stmt->errorInfo();
    }