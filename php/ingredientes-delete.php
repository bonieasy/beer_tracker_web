<?php 
require_once('init.php');

$codIngrediente = $_POST['cod'];

    $PDO = db_connect();
    $stmt = $PDO->prepare("DELETE FROM ingrediente where cod_ingrediente = :cod");
    $stmt->bindParam(':cod', $codIngrediente, PDO::PARAM_INT);

    if ($stmt->execute()){
        $response_array['success'] = 'success';
        var_dump(http_response_code(200));
        header('Content-Type: application/json');
        print json_encode($response_array);
    }
    else{
        $response_array['status'] = $stmt->errorInfo();
    }