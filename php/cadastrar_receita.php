<?php

require_once('init.php');

//$conexao = mysql_connect ("localhost", "root", "bancoGND");
//mysql_select_db ("gnd_cervejaria", $conexao);

if (isset($_POST["submit"]))

{

    $nome_receita = $_POST ["nome_receita"];
    $descricao_receita = $_POST ["comentario_receita"];
    $indice_og = $_POST ["OG"];
    $indice_fg = $_POST ["FG"];
    $indice_ibu = $_POST ["IBU"];
    $indice_abv = $_POST ["ABV"];
    $tempo_brasagem = $_POST ["brassagem"];
    $tempo_fervura = $_POST ["fervura"];
    $tempo_fermentacao = $_POST ["fermentacao"];
    $tempo_repouso = $_POST ["rampa"];
    $tempo_variacao = $_POST ["variacao"];

        $PDO = db_connect();

        $sql = "INSERT INTO receita
        (nome_receita,
        descricao_receita,
        indice_og,
        indice_fg,
        indice_ibu,
        indice_abv,
        tempo_brasagem,
        tempo_fervura,
        tempo_fermentacao,
        tempo_repouso,
        tempo_variacao) VALUES ('$nome_receita', '$descricao_receita', '$indice_og', '$indice_fg', '$indice_ibu', '$indice_abv', '$tempo_brasagem','$tempo_fervura', '$tempo_fermentacao', '$tempo_repouso', '$tempo_variacao')";   

        $stmt = $PDO->prepare($sql);

        ($stmt->execute());         
        
        echo "Receita cadastrada";    

}
else {
    die("<br />Nao foi possivel inserir registro: " . mysql_error());
  }
?>