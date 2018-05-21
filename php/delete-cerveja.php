<?php require_once('init.php');
    
$PDO = db_connect(); 

$cod_receita = $_GET["cod_receita"];

$sql = "DELETE FROM receita WHERE cod_receita=$cod_receita";

$statement = $PDO->prepare($sql);

if ($statement->execute(['cod_receita' => $cod_receita])) {

  header("Location: receitas-ca.php");
}

?>

