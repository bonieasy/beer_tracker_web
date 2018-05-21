<?php require_once('init.php');
    
$PDO = db_connect(); 

$cod_receita = $_GET["cod_fornecedor"];

$sql = "DELETE FROM fornecedor WHERE cod_fornecedor=$cod_receita";

$statement = $PDO->prepare($sql);

if ($statement->execute(['cod_fornecedor' => $cod_fornecedor])) {

  header("Location: fornecedor.php");
}

?>