<?php require_once('init.php');

    $PDO = db_connect(); 

    $cod_receita = $_GET["cod_receita"];

        $sqlDelete =$PDO->prepare "DELETE FROM receita WHERE cod_receita = '$cod_receita'";

        $sqlDelete->execute();

if ($sqlDelete):

    header ('Location:receitas-ca.php');

endif;

?>

